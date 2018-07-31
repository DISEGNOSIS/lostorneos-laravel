<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('name')->unique();
            $table->unsignedInteger('country_id')->after('password');
            $table->string('avatar')->after('country_id');
            $table->float('score', 10, 2)->after('avatar')->nullable();
            $table->string('social_hash')->nullable()->after('score');
            $table->boolean('active')->after('social_hash')->default(1);
            $table->date('last_sign_in')->after('active')->nullable();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
            $table->dropColumn('username');
            $table->dropColumn('country_id');
            $table->dropColumn('avatar');
            $table->dropColumn('score');
            $table->dropColumn('social_hash');
            $table->dropColumn('active');
            $table->dropColumn('last_sign_in');
        });
    }
}
