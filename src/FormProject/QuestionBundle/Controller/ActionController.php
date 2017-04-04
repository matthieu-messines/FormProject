<?php

namespace FormProject\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FormProject\QuestionBundle\Entity\Question;
use Symfony\Component\HttpFoundation\Response;

class ActionController extends Controller
{

    public function createAction()
    {
        $question1 = new Question();
        $question1->setIntitule('Quelle est la capitale du Zimbabwe ?');
        $question1->setBonneReponse('Harare');
        $question1->setProposition1('Bulawayo');
        $question1->setProposition2('Victoria Falls');
        $question1->setProposition3('Gweru');

        $question2 = new Question();
        $question2->setIntitule('De quelle couleur est le cheval blanc d\'Henri IV ?');
        $question2->setBonneReponse('blanc');
        $question2->setProposition1('rouge');
        $question2->setProposition2('vert');
        $question2->setProposition3('mauve à pois jaunes');

        $question3 = new Question();
        $question3->setIntitule('Pour 1 mètre, donnez-moi la valeur correspondante en pieds');
        $question3->setBonneReponse('3,28084');
        $question3->setProposition1('2,84359');
        $question3->setProposition2('3,01508');
        $question3->setProposition3('3,39482');

        $question4 = new Question();
        $question4->setIntitule('Combien de chromosomes possède un lièvre ?');
        $question4->setBonneReponse('48');
        $question4->setProposition1('40');
        $question4->setProposition2('44');
        $question4->setProposition3('52');

        $question5 = new Question();
        $question5->setIntitule('Quel est, en millions de tonnes, la quantité de nourriture ingérée par les araignées à l\'échelle mondiale ?');
        $question5->setBonneReponse('800');
        $question5->setProposition1('500');
        $question5->setProposition2('600');
        $question5->setProposition3('700');

        $question6 = new Question();
        $question6->setIntitule('Quelle est la vitesse moyenne, en km/h, nécessaire à une fusée pour quitter la planète Terre ?');
        $question6->setBonneReponse('41 000');
        $question6->setProposition1('12 500');
        $question6->setProposition2('56 000');
        $question6->setProposition3('29 000');

        $question7 = new Question();
        $question7->setIntitule('Quel est le numéro atomique du Berkelium ?');
        $question7->setBonneReponse('97');
        $question7->setProposition1('98');
        $question7->setProposition2('99');
        $question7->setProposition3('100');

        $question8 = new Question();
        $question8->setIntitule('Quel était le pays organisateur des championnats du monde d\'aviron en 1979 ?');
        $question8->setBonneReponse('Yougoslavie');
        $question8->setProposition1('République Tchèque');
        $question8->setProposition2('Bulgarie');
        $question8->setProposition3('Suisse');

        $question9 = new Question();
        $question9->setIntitule('Quelle est la population du Royaume du Bhoutan ?');
        $question9->setBonneReponse('741 919');
        $question9->setProposition1('738 942');
        $question9->setProposition2('768 127');
        $question9->setProposition3('757 682');

        $question10 = new Question();
        $question10->setIntitule('Quel est le 12eme président des Etats-Unis d\'Amériques ?');
        $question10->setBonneReponse('Zachary Taylor');
        $question10->setProposition1('James K. Polk');
        $question10->setProposition2('Millard Fillmore');
        $question10->setProposition3('James Buchanan');


        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save (no queries yet)
        $em->persist($question1);
        $em->persist($question2);
        $em->persist($question3);
        $em->persist($question4);
        $em->persist($question5);
        $em->persist($question6);
        $em->persist($question7);
        $em->persist($question8);
        $em->persist($question9);
        $em->persist($question10);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new question with ids '.$question1->getId().','.
                                                           $question2->getId().','.
                                                           $question3->getId().','.
                                                           $question4->getId().','.
                                                           $question5->getId().','.
                                                           $question6->getId().','.
                                                           $question7->getId().','.
                                                           $question8->getId().','.
                                                           $question9->getId().','.
                                                           $question10->getId());
    }

    public function afficherAction($idQuestion)
    {
        $question = $this->getDoctrine()
            ->getRepository('QuestionBundle:Question')
            ->find($idQuestion);

        if (!$question) {
            throw $this->createNotFoundException(
                'Pas de question avec l\'id'.$idQuestion
            );
        }

        // ... do something, like pass the $product object into a template
    }
}