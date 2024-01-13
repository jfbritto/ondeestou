<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Link extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->nullable();
            $table->string('id_social_network')->nullable();
            $table->string('name')->nullable();
            $table->string('link')->nullable();
            $table->string('phone')->nullable();
            $table->string('msg')->nullable();
            $table->string('status')->nullable();
            $table->string('order_link')->nullable();
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
        //
    }
}
