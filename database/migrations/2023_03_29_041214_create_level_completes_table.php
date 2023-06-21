<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelCompletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_completes', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('course_id');
            $table->integer('level_id');
            $table->integer('user_id');
            $table->integer('status')->default(0);
            $table->integer('skor');
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
        Schema::dropIfExists('level_completes');
    }
}
