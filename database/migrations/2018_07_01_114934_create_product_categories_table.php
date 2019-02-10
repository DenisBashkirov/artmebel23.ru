<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('product_categories'))
        {
            Schema::create('product_categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 32)->unique();
                $table->string('slug', 32)->unique();
                $table->string('img_type')->comment('sm or md');
                $table->string('type', 32)->comment('business or home');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
