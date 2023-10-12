<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Requests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
           
            $table->bigIncrements('requestId');

            $table->string('sender');
            $table->foreign('sender')->references('username')->on('users')->onUpdate('cascade')->onDelete('cascade');
          
            $table->bigInteger('blogId')->unsigned();
            $table->foreign('blogId')->references('blogId')->on('blog')->onUpdate('cascade')->onDelete('cascade');
            
            $table->boolean('read')->default(0);

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
        Schema::dropIfExists('requests');
    }
}
