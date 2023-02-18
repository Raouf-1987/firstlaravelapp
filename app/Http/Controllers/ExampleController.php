<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        // we loaded data from the database
        $ouName = 'Raouf';
        $animals = ['Cat', 'Dog', 'Horse'];
        return view("homepage", ['name' => $ouName, 'dogName' => 'loulou', 'animals' => $animals]);
    }
    public function aboutpage(){
        return view("single-post");
    }
}
