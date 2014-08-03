<?php

namespace Cheric\ExampleBundle\Controller;

use Symfony\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SoapController extends Controller
{
    public function myServiceAction()
    {
        $server = new \Zend\Soap\Server(null, array());
        $server->setObject($this->get('cheric.my_service'));
        
        return new Response(
            $server->handle(),
            200,
            array('content-type' => 'text/xml')
        );
    }
}
