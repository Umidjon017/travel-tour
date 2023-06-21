<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('top_left_country_name')->nullable();
            $table->string('top_left_image')->nullable();
            $table->integer('top_left_sale')->nullable();
            $table->string('left_country_name')->nullable();
            $table->string('left_image')->nullable();
            $table->integer('left_sale')->nullable();
            $table->string('right_country_name')->nullable();
            $table->string('right_image')->nullable();
            $table->integer('right_sale')->nullable();
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
        Schema::dropIfExists('destinations');
    }
};
