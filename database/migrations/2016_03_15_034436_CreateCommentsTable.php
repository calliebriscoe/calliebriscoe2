<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('users_id')->unsigned();
          $table->integer('posts_id')->unsigned();
          $table->integer('comments_id')->unsigned();
          $table->text('content');
          $table->boolean('seen')->default(false);
          $table->timestamps();
        });


		    Schema::table('comments', function(Blueprint $table) {
			    $table->foreign('users_id')
                ->references('id')
                ->on('users')
						    ->onDelete('restrict')
						    ->onUpdate('restrict');
			    $table->foreign('posts_id')
                ->references('id')
                ->on('posts')
						    ->onDelete('cascade')
						    ->onUpdate('cascade');
		    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('comments', function(Blueprint $table) {
              $table->dropForeign('comments_users_id_foreign');
              $table->dropForeign('comments_posts_id_foreign');
          });
          Schema::drop('comments');
    }
}
