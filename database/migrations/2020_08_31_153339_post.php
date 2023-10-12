<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('post', function (Blueprint $table) {
           
            $table->bigIncrements('postId');   
           
            // titolo del post
            $table->string('title',50);

            // riferimento al blog del post
            $table->bigInteger('blogId')->unsigned();
            $table->foreign('blogId')->references('blogId')->on('blog')->onUpdate('cascade')->onDelete('cascade');

            // username del utente ch escrive il post 
            $table->string('username_post_create');
            $table->foreign('username_post_create')->references('username')->on('users')->onUpdate('cascade')->onDelete('cascade');
                    
            // testata del post
            $table->string('headline',5000);
            
            // ogni post può essere strutturato in 2 'contenuti'
            $table->string('contenuto_1',5000);
            $table->string('contenuto_2',5000);

            // 2 sottotitoli
            $table->string('subtitle_1',500);
            $table->string('subtitle_2',500);
           
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
        Schema::dropIfExists('post');
    }
}
