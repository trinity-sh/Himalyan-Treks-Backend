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
        Schema::create('discountforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('days');
            $table->string('price');
            $table->string('img', 1000);
            $table->string('img_desp');
            $table->string('location');
            $table->string('camp_location');
            $table->string('height');
            $table->string('desp',50000);

            $table->string('iternery',50000)->nullable(true);
            // $table->string('iternery_day1')->nullable(true);
            // $table->string('iternery_day1_desp')->nullable(true);
            // $table->string('iternery_day2')->nullable(true);
            // $table->string('iternery_day2_desp')->nullable(true);
            // $table->string('iternery_day3')->nullable(true);
            // $table->string('iternery_day3_desp')->nullable(true);
            // $table->string('iternery_day4')->nullable(true);
            // $table->string('iternery_day4_desp')->nullable(true);
            // $table->string('iternery_day5')->nullable(true);
            // $table->string('iternery_day5_desp')->nullable(true);
            // $table->string('iternery_day6')->nullable(true);
            // $table->string('iternery_day6_desp')->nullable(true);
            // $table->string('iternery_day7')->nullable(true);
            // $table->string('iternery_day7_desp')->nullable(true);
            // $table->string('iternery_day8')->nullable(true);
            // $table->string('iternery_day8_desp')->nullable(true);
            // $table->string('iternery_day9')->nullable(true);
            // $table->string('iternery_day9_desp')->nullable(true);
            // $table->string('iternery_day10')->nullable(true);
            // $table->string('iternery_day10_desp')->nullable(true);
            // $table->string('iternery_day11')->nullable(true);
            // $table->string('iternery_day11_desp')->nullable(true);
            // $table->string('iternery_day12')->nullable(true);
            // $table->string('iternery_day12_desp')->nullable(true);
            // $table->string('iternery_day13')->nullable(true);
            // $table->string('iternery_day13_desp')->nullable(true);
            // $table->string('iternery_day14')->nullable(true);
            // $table->string('iternery_day14_desp')->nullable(true);
            // $table->string('iternery_day15')->nullable(true);
            // $table->string('iternery_day15_desp')->nullable(true);

            $table->string('gallery_img1', 1000)->nullable(true);
            $table->string('gallery_img2', 1000)->nullable(true);
            $table->string('gallery_img3', 1000)->nullable(true);
            $table->string('gallery_img4', 1000)->nullable(true);
            $table->string('gallery_img5', 1000)->nullable(true);
            $table->string('gallery_img6', 1000)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discountforms');
    }
};
