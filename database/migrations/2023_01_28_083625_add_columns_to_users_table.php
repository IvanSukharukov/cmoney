<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('login')->after('id')->nullable();
            $table->string('surname')->after('name')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_premium')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('login');
            $table->dropColumn('surname');
            $table->dropColumn('is_admin');
            $table->dropColumn('is_premium');
        });
    }
}
