<?php

namespace App\Migration;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokazanie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokazanie', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->double('value');
            $table->unsignedSmallInteger('type_id');
            $table->timestamps(0);
            $table->foreign('type_id')->references('id')->on('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokazanie');
    }
}
