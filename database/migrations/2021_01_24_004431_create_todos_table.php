<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        dd($tabls);
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $tabls->integer('user_id');
            $tabls->integer('goal_id');
            $tabls->integer('position');
            $tabls->bollean('done')->default(false);
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
        Schema::dropIfExists('to_dos');
    }
}
