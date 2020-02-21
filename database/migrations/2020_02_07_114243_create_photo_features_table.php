<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_features', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('photo_features_head_line_english');
            $table->string('photo_features_head_line_bangla')->nullable();

            $table->text('photo_features_image_source')->nullable();

            $table->text('photo_features_description_english')->nullable();
            $table->text('photo_features_description_bangla')->nullable();
            $table->text('tags')->nullable();
            
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');

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
        Schema::dropIfExists('photo_features');
    }
}
