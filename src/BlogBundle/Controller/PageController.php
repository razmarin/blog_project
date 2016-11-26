<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends Controller
{

    /**
     * @Route("/page", name="blog_page")
     */
    public function pageAction(Request $request)
    {
//        return $this->redirectToRoute('blog_show');
//        return new JsonResponse(['test']);
//        return $this->json(['asdsad', 'asdsaddsad']);
//        return $this->forward('BlogBundle:Default:index');

        // 404 pages - which u can customize
        // retrieve a user fron db
//        throw $this->createNotFoundException('The user was not found');

        // $request

//        $request->query; //GET params
//        $request->request; // POST params
//        $request->cookies; // cookies
//        $request->files; //files
//        $request->isXmlHttpRequest(); //checks to see if your request is ajaxy...
//        $request->headers;

        // session

//        $session = $request->getSession();
//        $session->set('cici', 'bici');
//        dump($session);die;

        // flash messages
//        $this->addFlash('notice', 'Well... this is a flash message');
//        return $this->render('@Blog/Page/page.html.twig');


    }

//    /**
//     * @Route("/page1", name="blog_page1")
//     */
//    public function page1Action(Request $request)
//    {
//        return $this->render('@Blog/Page/page.html.twig');
//    }
}