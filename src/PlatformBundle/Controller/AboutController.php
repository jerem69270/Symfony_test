<?php
/**
 * Created by PhpStorm.
 * User: Jérémy
 * Date: 13/02/2016
 * Time: 22:36
 */

namespace PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('PlatformBundle:About:index.html.twig');
        return new Response($content);
    }
}