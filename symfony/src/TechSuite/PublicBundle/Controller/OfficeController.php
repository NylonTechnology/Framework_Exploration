<?php

namespace TechSuite\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TechSuite\PublicBundle\Entity\Office;

class OfficeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
		    $offices = $this->getDoctrine()
		        ->getRepository('TechSuitePublicBundle:Office')
		        ->findAll();

        return $this->render('TechSuitePublicBundle:Office:index.html.twig', array('offices'=>$offices));
    }


    public function showAction($id = null)
		{
		    $office = $this->getDoctrine()
		        ->getRepository('TechSuitePublicBundle:Office')
		        ->findOneByIdJoinedToContacts($id);

		    if (!$office) {
		        throw $this->createNotFoundException(
		            'No office found for id '.$id
		        );
		    }

		    // ... do something, like pass the $product object into a template
		    return $this->render('TechSuitePublicBundle:Office:show.html.twig', array('office'=>$office));

		}


}
