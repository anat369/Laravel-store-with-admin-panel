<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('price');
            $table->string('title');
            $table->string('availability');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('img_5')->nullable();
            $table->string('description');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keyword');
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('is_popular')->default(0);
            $table->integer('is_recommended')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('items');
    }
}
