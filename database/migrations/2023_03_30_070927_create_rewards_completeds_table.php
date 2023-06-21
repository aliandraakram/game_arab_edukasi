<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsCompletedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards_completeds', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('course_id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('location');
            $table->string('keterangan')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('rewards_completeds');
    }
}
