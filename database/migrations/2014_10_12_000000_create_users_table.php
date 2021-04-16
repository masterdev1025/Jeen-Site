<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('userFirst');
            $table->string('userLast');
            $table->string('userPhone');
            $table->string('userPosition');
            $table->string('userAddress1');
            $table->string('userAddress2');
            $table->string('userCity');
            $table->string('userState');
            $table->string('userPostal');
            $table->string('userCountry');
            $table->string('registerDate');
            $table->string('approvalDate');
            $table->integer('userStatus');
            $table->string('notes');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
