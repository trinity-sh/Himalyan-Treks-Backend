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
        Schema::create('blogforms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date')->nullable(true);
            $table->string('banner', 1000);
            $table->string('desp', 50000);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogforms');
    }
};
