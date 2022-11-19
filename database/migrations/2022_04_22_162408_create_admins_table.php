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
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->unsignedInteger('role');
            $table->unsignedInteger('isSuper');
            $table->unsignedInteger('reset_password');
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
        Schema::dropIfExists('admins');
    }
};
