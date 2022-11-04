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
        Schema::create('front_images', function (Blueprint $table) {
            $table->front_images_id();
            $table->string('property_type');
            $table->string('image');
            $table->string('property_description');
            $table->string('property_location');
            $table->string('property_price');
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
        Schema::dropIfExists('front_images');
    }
};
