<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('news_head_line_english');
            $table->string('news_head_line_bangla')->nullable();

            $table->text('image_source')->nullable();
            
            $table->text('news_body_english');
            $table->text('news_body_bangla')->nullable();
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
        Schema::dropIfExists('news');
    }
}
