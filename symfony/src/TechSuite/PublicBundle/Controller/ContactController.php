<?php

namespace TechSuite\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TechSuite\PublicBundle\Entity\Contact;

class ContactController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
		    $contacts = $this->getDoctrine()
		        ->getRepository('TechSuitePublicBundle:Contact')
		        ->findAll();

        return $this->render('TechSuitePublicBundle:Contact:index.html.twig', array('contacts'=>$contacts));
    }


    public function showAction($id = null)
		{
		    $contact = $this->getDoctrine()
		        ->getRepository('TechSuitePublicBundle:Contact')
		        ->findOneByIdJoinedToOffices($id);

		    if (!$contact) {
		        throw $this->createNotFoundException(
		            'No contact found for id '.$id
		        );
		    }

		    // ... do something, like pass the $product object into a template
		    return $this->render('TechSuitePublicBundle:Contact:show.html.twig', array('contact'=>$contact));

		}


}
