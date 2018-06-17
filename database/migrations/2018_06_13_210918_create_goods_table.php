<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('img_5')->nullable();
            $table->string('description');
            $table->integer('category_id')->nullable();
            $table->integer('status')->default(0);
            $table->date('date')->nullable();
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
        Schema::dropIfExists('goods');
    }
}
