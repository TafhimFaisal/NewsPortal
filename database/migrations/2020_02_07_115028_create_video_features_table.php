<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_features', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('video_features_head_line_english');
            $table->string('video_features_video_link_bangla')->nullable();

            $table->text('video_features_video_discription_english');
            $table->text('video_features_video_discription_bangla')->nullable();
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
        Schema::dropIfExists('video_features');
    }
}
