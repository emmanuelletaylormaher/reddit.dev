<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('posts', function(Blueprint $table)
       {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->string('content', 460);
            $table->string("created_by")->unsigned();
            $table->timestamps("created_at");
            $table->timestamps("updated_at");
       })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::('contacts');
    }
}
