<?php

use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'кабинет руководителя',
                'slug' => 'executive',
                'img_type' => 'md',
                'type' => 'business'
            ],
            [
                'name' => 'для персонала',
                'slug' => 'personnel',
                'img_type' => 'md',
                'type' => 'business'
            ],
            [
                'name' => 'для гостиниц',
                'slug' => 'hotels',
                'img_type' => 'md',
                'type' => 'business'
            ],
            [
                'name' => 'мягкая мебель',
                'slug' => 'soft_furniture',
                'img_type' => 'md',
                'type' => 'business'
            ],
            [
                'name' => 'кухни',
                'slug' => 'kitchens',
                'img_type' => 'md',
                'type' => 'home'
            ],
            [
                'name' => 'для гостиной',
                'slug' => 'living_room',
                'img_type' => 'md',
                'type' => 'home'
            ],
            [
                'name' => 'шкафы',
                'slug' => 'wardrobes',
                'img_type' => 'md',
                'type' => 'home'
            ],
            [
                'name' => 'для прихожей',
                'slug' => 'entry_room',
                'img_type' => 'md',
                'type' => 'home'
            ],
        ]);
    }
}
