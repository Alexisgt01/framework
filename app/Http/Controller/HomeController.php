<?php


namespace App\Http\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $var = 'rettre';
        $int = 1512122;
        $this->template = 'index';
        return $this->view('home', [
            'var' => $var,
            'int' => $int
        ]);
    }
}
