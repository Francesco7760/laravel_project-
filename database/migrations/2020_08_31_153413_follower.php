<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Follower extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follower', function (Blueprint $table) {
            
            $table->bigIncrements('followerId');

            // proprietario del blog   
            $table->bigInteger('blogId')->unsigned();
            $table->foreign('blogId')->references('blogId')->on('blog')->onUpdate('cascade')->onDelete('cascade');

            // utente che ha il permesso di visuallizzare ed aggiungere post 
            $table->string('follower');
            $table->foreign('follower')->references('username')->on('users')->onUpdate('cascade');
            
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
        Schema::dropIfExists('follower');
    }
}
