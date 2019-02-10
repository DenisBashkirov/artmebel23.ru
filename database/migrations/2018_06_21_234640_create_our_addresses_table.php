<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('our_addresses'))
        {
            Schema::create('our_addresses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 32);
                $table->string('city', 32);
                $table->text('street');
                $table->text('building');
                $table->text('office')->nullable();
                $table->text('full');
                $table->text('short');
                $table->text('descr')->nullable();
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
        Schema::dropIfExists('our_addresses');
    }
}
