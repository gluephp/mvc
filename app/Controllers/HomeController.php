<?php namespace App\Controllers;

use Glue\Mvc\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return $this->plates->render('home');
    }
}