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
            $table->string('img', 1000);
            $table->string('img_desp');
            $table->string('location');
            $table->string('camp_location');
            $table->string('height');
            $table->string('desp', 10000);
            $table->string('iternery', 10000)->nullable(true);
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
        Schema::dropIfExists('treksforms');
    }
};
