<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
            $table->integer('send');
            $table->string('chkphone')->nullable();
            $table->string('chkemail')->nullable();
            $table->string('chkmobile_app')->nullable();
            $table->string('chkfax')->nullable();
            $table->string('chksms')->nullable();
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
        Schema::dropIfExists('user_informations');
    }
}