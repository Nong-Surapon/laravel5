<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index()
    {
        return 'Wecome to my web site!';
    }

    public function about()
    {
        return 'Learn a little about me';
    }

    public function home()
    {
        return view('pages.home');
    }

    public function arr()
    {
        $lessons = ['My First Lesson', 'My Second Lesson', 'My Third Lesson'];
        $name = 'Jeffrey Way';

        return view('pages.home', compact('lessons', 'name'));


    }
}
