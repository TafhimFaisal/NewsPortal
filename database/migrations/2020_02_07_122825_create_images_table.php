<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('image_source');

            $table->string('image_title_english')->nullable();
            $table->string('image_title_bangla')->nullable();

            $table->string('image_disctiption_english')->nullable();
            $table->string('image_disctiption_bangla')->nullable();
            
            $table->unsignedBigInteger('photo_feature_id');
            
            $table->foreign('photo_feature_id')->references('id')->on('photo_features');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
