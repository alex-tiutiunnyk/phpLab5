<?php


namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;

//use Symfony\Component\Console\Input\Input;

class newController
{

    public function index()
    {
        return "Hello you there";
    }

    public function getName($name)
    {

        return "Hello !!! $name";
    }

    public function getId($id)
    {
        $temp = new Person($id);
        return view('myView', ['obj' => $temp]);
    }

    public function display()
    {
        return view('about');
    }

    public function displayCheck($id)
    {
        return view('myView', compact('id'));
    }

    public function show($id, $name, $password)
    {
        return view('about', compact('id', 'name', 'password'));
    }
    public function showDetails()
    {
        return view('myView', ['students'=>['user1', 'user2', 'user3', 'user4']]);
    }
}
