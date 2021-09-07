<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('l_name');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('image')->nullable();
            $table->string('phone_num');
            $table->double('price', 8, 2);
            $table->string('area');
            $table->string('garage');
            $table->date('date');
            $table->integer('bedroom');
            $table->integer('Bath');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
