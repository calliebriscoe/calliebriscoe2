<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('main_image_edu');
            $table->string('school_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('main_description');
            $table->string('skill_head_1');
            $table->string('skill_img_1');
            $table->string('skill_description_1');
            $table->string('skill_head_2');
            $table->string('skill_img_2');
            $table->string('skill_description_2');
            $table->string('skill_head_3');
            $table->string('skill_img_3');
            $table->string('skill_description_3');
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
        Schema::drop('education');
    }
}
