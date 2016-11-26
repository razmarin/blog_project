<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }

//    /**
//     * @Route("/blog/{name}", name="basic_name")
//     */
//    public function blogAction($name)
//    {
//        return $this->render('@Blog/Default/blog.html.twig');
//    }
//
//    /**
//     * @Route("/blog/{name}/{page}", name="blog_name_page")
//     */
//    public function blog1Action($name, $page, $asdasdas)
//    {
//        die('1');
//        return $this->render('@Blog/Default/blog.html.twig');
//    }
//
//    /**
//     * @Route("/blog/{name}/{page}", name="blog_name_page")
//     */
//    public function blog2Action($name, $page) //2 of the same route will match the first one
//    {
//        return $this->render('@Blog/Default/blog.html.twig');
//    }

//    /**
//     * @Route("/blog/{name}", defaults={"name" = 1}, name="blog_name")
//     */
//    public function blogAction($name)
//    {
//        return $this->render('@Blog/Default/blog.html.twig');
//    }

//    /**
//     * @Route("/blog/{page}", defaults={"page" = 1}, requirements={"page" : "\d+"}, name="blos_name")
//     */
//    public function testAction($page)
//    {
//        return new Response('test action');
//    }

//    /**
//     * @Route("/blog/{slug}", requirements={"slug" = "[a-zA-z]+"})
//     */
//    public function showAction($slug)
//    {
//        return new Response('show action');
//    }

    /**
     * @Route("/blog/{slug}", name="blog_route")
     * @Method({"GET", "HEAD"})
     */
    public function showAction($slug)
    {
        return new Response('show action');
    }
//
    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/router", name="router_action")
     */
    public function routerAction(Request $request)
    {
//        dump($this->get('router')->generate('blog_route', ['slug' => 'test']));
//        die;
//        dump($this->get('router')->generate('blog_route', ['slug' => 'test', 'cici' => 'bici']));
//        dump($this->get('router')->match('/blog/astasd'));die;

        return $this->render('@Blog/Default/router.html.twig');
    }

}
