<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonkeysController extends Controller
{
    public function monkeysData(){
//        $joe = \App\Models\Monkey::where('name', 'Joe')->first();
//
//        $fruit = $joe->fruit;
//
//        return $fruit;



        $monkey = \App\Models\Monkey::where('name', '=', 'Brenda')->first();

        foreach ($monkey->hotels as $hotel)
            echo $hotel->name . ' ' . $hotel->rating;

        echo"\n \n";

        $hotel = \App\Models\Hotel::where('name', '=', 'Hilton')->first();

        foreach ($hotel->monkeys as $monkey)
            echo $monkey->name . ' ' . $monkey->type . ' ' . $monkey->happiness_level;
    }
}
