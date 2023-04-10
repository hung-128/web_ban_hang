<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_permission', function (Blueprint $table) {
            $table->string('module', 255);
            $table->integer('value');
            $table->dropForeign(['permission_id']);
            $table->dropColumn('permission_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_permission', function (Blueprint $table) {
            $table->dropColumn('module', 255);
            $table->dropColumn('value');
//            $table->unsignedBigInteger('permission_id');
//            $table->foreign('permission_id')->references('id')->on('permissions');
        });
    }
}
