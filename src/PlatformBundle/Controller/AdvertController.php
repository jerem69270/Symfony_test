<?php
/**
 * Created by PhpStorm.
 * User: Jérémy
 * Date: 13/02/2016
 * Time: 22:28
 */

namespace PlatformBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
    public function indexAction()
    {
        return new Response("Hello World !");
    }
}