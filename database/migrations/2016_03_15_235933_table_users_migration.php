<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersMigration extends Migration
{
    /**
     * Run the migrations for the foreign key of roles.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function(Blueprint $table) {
          $table->foreign('roles_id')
                ->references('id')
                ->on('roles')
                ->onDelete('restrict')
                ->onUpdate('restrict');
      });
    }

    /**
     * Reverse the migrations for the foreign key of roles.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function(Blueprint $table) {
          $table->dropForeign('users_roles_id_foreign');
      });
    }
}
