<?php

use RedBean_Facade as R;

class Controller
{
    /** @var Twig_Environment $twig */
    protected $twig;

    /** @var Base $f3 */
    protected $f3;

    /** @var Web $web */
    //protected $web;

    public function __construct()
    {
        $this->twig = $GLOBALS['twig'];
        $this->f3   = Base::instance();
        //$this->web  = Web::instance();
    }

    public function get()
    {
        echo $this->twig->render('index.html.twig', [
            'example' => $this->f3->get('IP')
        ]);
    }

    public function post()
    {
        $this->f3->error(405);
    }
}