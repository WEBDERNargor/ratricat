<?php

namespace App\Controllers;

use App\Models\User;
use PDO;
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
 

    public function profile()
    {
        return VIEW('profile');
    }
    public function login()
    {
        return VIEW('login');
    }
    public function login_process()
    {
       $user = $this->user->custom("SELECT * FROM users WHERE email = :email", ['email' => $_POST['email']]);
       if($user->rowCount() > 0){
        $user = $user->fetch(PDO::FETCH_OBJ);
        if(password_verify($_POST['password'], $user->password)){
            $_SESSION['user'] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ];
            return redirect('/profile');
        }else{
            exit('password not match');
        }
       }else{
        exit('user not found');
       }
    }
    public function logout()
    {
        unset($_SESSION['user']);
        return redirect('/');
    }
}