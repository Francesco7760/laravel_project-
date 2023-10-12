<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Allert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allert', function (Blueprint $table) {
           
            $table->bigIncrements('allertId');

            $table->string('cause', 200);

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
        Schema::dropIfExists('allert');
    }
}
