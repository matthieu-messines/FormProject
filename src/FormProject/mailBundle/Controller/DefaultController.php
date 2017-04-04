<?php

namespace FormProject\mailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        //envoie de mail
        $message = \Swift_Message::newInstance()
                ->setSubject('Votre score')
                ->setFrom(array('votreMail' => 'QuestionPourUnChampion!'))
                ->setTo('mail de destination') //$commande->getUtilisateur()->getEmailCanonical()
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('FormProjectmailBundle:Default:SwiftLayout/scoreMail.html.twig'));
                
        $this->get('mailer')->send($message);

        return $this->render('FormProjectmailBundle:Default:SwiftLayout/scoreMail.html.twig');
    }
}
