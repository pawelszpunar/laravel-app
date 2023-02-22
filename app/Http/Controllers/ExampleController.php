<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {

        $ourName = 'Brad';
        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catName' => 'Meowsalot']);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
