<?php

namespace CampaignChain\DocHtmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CampaignChainDocHtmlBundle:Default:index.html.twig', array('name' => $name));
    }
}
