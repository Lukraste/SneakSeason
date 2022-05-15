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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 191)->unique();
            $table->string('password', 255);
            $table->string('role')->default('user');
            $table->integer('max_orders')->default(5)->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('firstname', 255)->nullable();
            $table->string('birthdate', 255)->nullable();
            $table->enum('gender', ['Femme', 'Homme'])->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->boolean('rgpd')->default(false);
            $table->boolean('newsletters')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
};
