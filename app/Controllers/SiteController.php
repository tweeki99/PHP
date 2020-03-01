<?php

namespace Controllers;

use Core\_Abstracts\Controller;
use Models\Books;

class SiteController extends Controller
{
    function index(){
        Books::insert([
            'name' => 'Test test'
        ]);

        return $this->render('index');
    }

}