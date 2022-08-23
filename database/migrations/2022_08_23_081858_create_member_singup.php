<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_singup', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('password');
            $table->string('email');
            $table->string('name');
            $table->string('nickname');
            $table->string('date');
            $table->string('password_change_date');
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
        Schema::dropIfExists('member_singup');
    }
};
