<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
           
            $table->bigIncrements('notifyId');

            $table->string('recipient');
            $table->foreign('recipient')->references('username')->on('users')->onUpdate('cascade')->onDelete('cascade');
                  
            $table->string('sender');
            $table->foreign('sender')->references('username')->on('users')->onUpdate('cascade')->onDelete('cascade');
            

            // per default una notifica viene settata a "non letta" 
            $table->boolean('read')->default(0);

            $table->bigInteger('blogId')->unsigned();
            $table->foreign('blogId')->references('blogId')->on('blog')->onUpdate('cascade')->onDelete('cascade');
            
                  
           
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
        Schema::dropIfExists('notifications');
    }
}
