<?php

namespace FormProject\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FormProject\QuestionBundle\Entity\Question;
use FormProject\QuestionBundle\Entity\Questionnaire;
use FormProject\ScoreBundle\Entity\Score;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FormProject\ScoreBundle\Controller\DefaultController as ScoreController;
use FOS\UserBundle\Document\User as BaseUser;

class QuestionnaireController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('QuestionBundle:Question');

        $questionnaire = new Questionnaire();
        $question1 = $repository->find(1);
        $question2 = $repository->find(2);
        $question3 = $repository->find(3);
        $question4 = $repository->find(4);
        $question5 = $repository->find(5);
        $question6 = $repository->find(6);
        $question7 = $repository->find(7);
        $question8 = $repository->find(8);
        $question9 = $repository->find(9);
        $question10 = $repository->find(10);

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class,$questionnaire);
        $formBuilder->add('question1',ChoiceType::class,array(
                            'label' => $question1->getIntitule(),
                            'choices' => array($question1->getProposition1()=>false,
                                                $question1->getBonneReponse()=>true,
                                                $question1->getProposition2()=>false,
                                                $question1->getProposition3()=>false)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question2',ChoiceType::class,array(
                            'label' => $question2->getIntitule(),
                            'choices' => array($question2->getProposition1()=>false,
                                                $question2->getProposition2()=>false,
                                                $question2->getProposition3()=>false,
                                                $question2->getBonneReponse()=>true)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question3',ChoiceType::class,array(
                            'label' => $question3->getIntitule(),
                            'choices' => array($question3->getProposition1()=>false,
                                                $question3->getProposition2()=>false,
                                                $question3->getBonneReponse()=>true,
                                                $question3->getProposition3()=>false)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question4',ChoiceType::class,array(
                            'label' => $question4->getIntitule(),
                            'choices' => array($question4->getProposition1()=>false,
                                                $question4->getProposition2()=>false,
                                                $question4->getBonneReponse()=>true,
                                                $question4->getProposition3()=>false)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question5',ChoiceType::class,array(
                            'label' => $question5->getIntitule(),
                            'choices' => array($question5->getProposition1()=>false,
                                                $question5->getProposition2()=>false,
                                                $question5->getProposition3()=>false,
                                                $question5->getBonneReponse()=>true)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question6',ChoiceType::class,array(
                            'label' => $question6->getIntitule(),
                            'choices' => array($question6->getProposition1()=>false,
                                                $question6->getProposition3()=>false,
                                                $question6->getBonneReponse()=>true,
                                                $question6->getProposition2()=>false)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question7',ChoiceType::class,array(
                            'label' => $question7->getIntitule(),
                            'choices' => array($question7->getBonneReponse()=>true,
                                                $question7->getProposition1()=>false,
                                                $question7->getProposition2()=>false,
                                                $question7->getProposition3()=>false)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question8',ChoiceType::class,array(
                            'label' => $question8->getIntitule(),
                            'choices' => array($question8->getProposition1()=>false,
                                                $question8->getProposition2()=>false,
                                                $question8->getProposition3()=>false,
                                                $question8->getBonneReponse()=>true)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question9',ChoiceType::class,array(
                            'label' => $question9->getIntitule(),
                            'choices' => array($question9->getProposition1()=>false,
                                                $question9->getBonneReponse()=>true,
                                                $question9->getProposition3()=>false,
                                                $question9->getProposition2()=>false)
                            ,'expanded' => true
                            ,'attr' => array('class' => 'divQuestion')
                    ))
                    ->add('question10',ChoiceType::class,
                                array(
                                'label' => $question10->getIntitule(),
                                'choices' => array($question10->getProposition1()=>false,
                                                        $question10->getProposition2()=>false,
                                                        $question10->getBonneReponse()=>true,
                                                        $question10->getProposition3()=>false)
                                ,'expanded' => true
                                ,'attr' => array('class' => 'divQuestion')
                                )
                    )

                    ->add('submit',SubmitType::class);
        $form = $formBuilder->getForm();

        if($request->isMethod('POST')){
                $repository = $this->getDoctrine()->getRepository('ScoreBundle:Score');
                $em = $this->getDoctrine()->getManager();
                
                $form->handleRequest($request);
                $task = $form->getData();
                $result=$task->getNbPoints();
                
                //get current user id
                $user_id = $this->getUser()->getId();
                $score_controller = new ScoreController($em, $repository);
                $score = $score_controller->registerScore($result, $user_id);
                
                return $this->render('QuestionBundle:Questionnaire:reponse.html.twig',array(
                                        'result' => $result,
                                        'score'  => $score
                ));
        }
        return $this->render('QuestionBundle:Questionnaire:index.html.twig',array('form'=>$form->createView()));
    }
}
