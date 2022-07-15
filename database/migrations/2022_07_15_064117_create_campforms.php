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
        Schema::create('campforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('days');
            $table->string('price');
            $table->string('img');
            $table->string('img_desp');
            $table->string('location');
            $table->string('camp_location');
            $table->string('height');
            $table->string('desp', 10000);
            $table->string('iternery', 10000)->nullable(true);
            $table->string('gallery_img1')->nullable(true);
            $table->string('gallery_img2')->nullable(true);
            $table->string('gallery_img3')->nullable(true);
            $table->string('gallery_img4')->nullable(true);
            $table->string('gallery_img5')->nullable(true);
            $table->string('gallery_img6')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campforms');
    }
};
