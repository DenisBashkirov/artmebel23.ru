<?php

namespace App\Http\Controllers;

use App\OurAddress;
use App\OurPhone;
use App\OurEmail;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $template;
    protected $vars;
    protected $page_title;

    protected function  renderOutput()
    {
        $data = $this->vars;
        $data['page_title'] = $this->page_title;

        // Вывод контактных данных
        $data['our_phones'] = OurPhone::all();
        $data['our_addresses'] = OurAddress::all();
        $data['our_emails'] = OurEmail::all();

        return view($this->template, $data);
    }
}