<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{
    protected $user;

    public function __construct()
    {
        global $app;
        $this->user = new User($app->db);
    }

    public function index()
    {
        $users = $this->user->all();
        return VIEW('home', ['users' => $users]);
    }
}
