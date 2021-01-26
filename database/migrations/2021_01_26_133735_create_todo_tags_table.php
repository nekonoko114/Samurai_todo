<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_todo', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->integer('todo');
                $table->integer('tag_id');
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
        Schema:table('todo_tags',function(Blueprint $table){
            $table->dropColmun('todo_id');
            $table->dropColmun('tag_id');
        });
    }
}