<?php

namespace App\Http\Controllers;

use App\ConfigEntry;
use App\Drink;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Response;

abstract class DrinkController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    public function listDrinks()
    {
        return Response::Json(Drink::all())->setCallback(Input::get('callback'));
    }

    public function listCategories()
    {

        return Response::Json(DrinkController::getUniqueCategories())->setCallback(Input::get('callback'));
    }

    public function randomDrinks()
    {

        $categories = DrinkController::getUniqueCategories();
        $randomDrinks = [];
        foreach ($categories as $category) {
            $randomDrinks[$category] = ConfigEntry::byKey('rnd_drink_' . $category);
        }

        return Response::Json($randomDrinks)->setCallback(Input::get('callback'));
    }

    private static function getUniqueCategories()
    {
        $drinks = Drink::all();


        $categories = [];
        foreach ($drinks as $drink) {
            if (!in_array($drink->category, $categories, true)) {
                array_push($categories, $drink->category);
            }
        }

        return $categories;
    }
}