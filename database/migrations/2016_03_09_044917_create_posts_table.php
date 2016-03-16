<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->string('slug', 255)->unique();
            $table->string('title');
            $table->text('summary');
            $table->text('content');
            $table->boolean('seen')->default(false);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function(Blueprint $table) {
          $table->dropForeign('posts_users_id_foreign');
});
        Schema::drop('posts');
    }
}
