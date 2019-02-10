<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class PagesController extends BaseController
{
    public function __construct()
    {
        $this->template = 'frontend.pages.';
        $this->page_title = 'АртМебель - ';
    }

    public function index()
    {
        $this->template .= 'main';
        $this->page_title .= 'Главная';

        return $this->renderOutput();
    }

    public function house()
    {
        $categories = ProductCategory::where('type', 'house')->get();
        $this->vars = array_add($this->vars, 'categories', $categories);

        $this->page_title .= 'Мебель для дома';

        $this->template .= 'house';

        return $this->renderOutput();
    }

    public function business()
    {
        $categories = ProductCategory::where('type', 'business')->get();
        $this->vars = array_add($this->vars, 'categories', $categories);

        $this->page_title .= 'Мебель для бизнеса';

        $this->template .= 'business';

        return $this->renderOutput();
    }

    public function about()
    {
        $this->page_title .= 'О компании';

        $this->template .= 'about';

        return $this->renderOutput();
    }

    public function portfolio()
    {
        $this->page_title .= 'Наши работы';

        $this->template .= 'portfolio';

        return $this->renderOutput();
    }

    public function contacts()
    {
        $this->page_title .= 'Контакты';

        $this->template .= 'contacts';

        return $this->renderOutput();
    }

    public function category($category)
    {
        $category = ProductCategory::where('slug', $category)->first();
        $this->vars = array_add($this->vars, 'category', $category);

        $series = $category->series()->where('production', null)->get();
        $this->vars = array_add($this->vars, 'series', $series);

        $import = $category->series()->where('production', 'import')->get();
        $this->vars = array_add($this->vars, 'import', $import);

        $this->page_title .= $category->name;

        $this->template .= 'category';

        return $this->renderOutput();
    }

}
