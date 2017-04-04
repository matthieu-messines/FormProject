<?php

namespace FormProject\ScoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FormProject\ScoreBundle\Entity\Score;
use UserBundle\Entity\User;

class DefaultController extends Controller
{
    private $em;
    private $repository;

    public function __construct($em = null, $repo = null){
        $this->em = $em;
        $this->repository = $repo;
    }

    public function indexAction()
    {
        return $this->render('ScoreBundle:Default:index.html.twig');
    }

    public function ShowAction($id_user = null){
        $repository = $this->getDoctrine()->getRepository('ScoreBundle:Score');
        $em = $this->getDoctrine()->getManager();
        $score;

        if($id_user == null){
            $score = $repository->findAll();
        }else{
            $score = $repository->findBy(
                                        ['idUser' =>  $id_user],
                                        ['score' => 'ASC']
                                    );
            if (!$score){
                $score = $this->createScore(0,666);
            }
        }

        return $this->render('ScoreBundle:Default:index.html.twig', [
            'list_score' => $score
        ]);

    }

    public function createScore($reponse, $id_user){
        $score = new Score();   
        $score->setNbQuestion(10);
        $score->setNbReponse($reponse);
        $score->setScore(((int)$reponse)/10);
        $score->setIdUSer($id_user);

        $this->em->persist($score);
        $this->em->flush();

        return $score;
    }

    public function registerScore($good_answer, $user_id){

        $score = $this->repository->findByIdUser($user_id);
        
        if (!$score) {
            $score = $this->createScore($good_answer, $user_id);
        }else{
            $this->updateScore($score[0], $good_answer);
        }

        return $score[0];
    }

    public function updateScore($score, $good_answer){

        $score = $score;
        $score -> setNbQuestion($score->getNbQuestion()+10);
        $score -> setNbReponse($score->getNbReponse()+$good_answer);
        $score -> setScore(($score->getScore()) + 1 + ($good_answer/10));

        $this->em->flush();
        
    }

    public function DeleteAction($id_user){

        $score = $this->repository->find($id_user);

        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        
        return $this->redirectToRoute('homepage');
    }
}
