<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('landlord_id')->unsigned();
            $table->string('address')->nullable();
            $table->string('description')->nullable();
            $table->double('price', 8, 2);	
            $table->string('banner_image')->nullable();
            $table->json('listing_images')->nullable();
            $table->enum('type', ['apartment', 'house', 'condo', 'studio', 'room', 'other']);	
            $table->boolean('available')->nullable();
            $table->json('descriptors')->nullable();	
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
        Schema::dropIfExists('listings');
    }
}
