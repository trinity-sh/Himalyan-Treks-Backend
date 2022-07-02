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
        Schema::create('treksforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('days');
            $table->string('price');
            $table->string('img');
            $table->string('img_desp');
            $table->string('location');
            $table->string('camp_location');
            $table->string('height');
            $table->string('desp');
            $table->string('iternery');
            $table->string('iternery_desp');
            $table->string('price_inclusion');
            $table->string('price_exclusion');
            $table->string('gallery_img1');
            $table->string('gallery_img2');
            $table->string('gallery_img3');
            $table->string('gallery_img4');
            $table->string('gallery_img5');
            $table->string('gallery_img6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treksforms');
    }
};
