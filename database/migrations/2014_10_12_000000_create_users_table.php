<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('url_name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('status')->nullable();
            $table->string('bio')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_theme')->nullable();
            $table->string('is_root')->nullable();
            $table->string('is_admin')->nullable();
            $table->string('id_admin')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
