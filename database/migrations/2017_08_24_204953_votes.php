<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Votes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("votes", function(Blueprint $table)
        {
            $table->increments("id");
            $table->string("user_id")->unsigned();
            $table->string("post_id")->unsigned();
            $table->integer("vote");
            $table->datetime("created_at");
            $table->datetime("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("votes");
    }
}
