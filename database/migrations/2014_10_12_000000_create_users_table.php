<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 30)->unique();
      			$table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('role_id')->unsigned();
            $table->boolean('seen')->default(false);
            $table->boolean('valid')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('users', function(Blueprint $table) {
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
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
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
    });
        Schema::drop('users');
    }
}
