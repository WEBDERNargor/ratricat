<?php

namespace App\Controllers;

class HomeController
{
    protected $user;

    public function __construct()
    {
       
    }

    public function index()
    {
      
        return VIEW('user.home', []);
    }
}