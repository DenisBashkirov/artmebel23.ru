<?php

namespace App\Http\Controllers\Admin;

use App\ProductSeriesItem;
use Illuminate\Http\Request;
use DB;

class HomeController extends AdminBaseController
{
    public function index()
    {/*
        $series_id = 17;


            DB::table('product_series_items')->insert([
                [
                    'name' => 'панель прикроватная',
                    'img' => '1.png',
                    'size' => '250x120',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'кровать',
                    'img' => '2.png',
                    'size' => '80x190x35',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'тумба прикроватная',
                    'img' => '3.png',
                    'size' => '40x40x45',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'комод',
                    'img' => '4.png',
                    'size' => '40x40x45',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'стол',
                    'img' => '5.png',
                    'size' => '160x55x74',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'тумба для багажа',
                    'img' => '6.png',
                    'size' => '60x40x45',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'шкаф для одежды',
                    'img' => '7.png',
                    'size' => '40x57x200',
                    'series_id' => $series_id
                ],
                [
                    'name' => 'шкаф для одежды',
                    'img' => '8.png',
                    'size' => '60x47x2000',
                    'series_id' => $series_id
                ],
            ]);*/


        $this->template = 'backend.pages.home';

        return $this->renderOutput();
    }
}