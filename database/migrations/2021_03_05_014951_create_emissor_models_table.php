<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmissorModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emissor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login',30);
            $table->string('menu',30);
            $table->string('title',30);
            $table->string('banco',15)->nullable();
            $table->string('iframe');
            $table->string('token');
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
        Schema::dropIfExists('emissor');
    }
}
