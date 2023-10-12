<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('blog', function (Blueprint $table) {
            
            $table->bigIncrements('blogId');  
            
            // dati caratteristici del utente che crea il suo blog
            $table->string('username_user_create');

            $table->foreign('username_user_create')->references('username')->on('users')->onUpdate('cascade')->onDelete('cascade');
            
            // titolo del blog
            $table->string('title_blog',25);
            
            // 3 #tag stanno ad indicare i 3 argomentiche il blog tratta (min 1 and max 3)
            $table->string('tag_1',25);
            $table->string('tag_2',25);
            $table->string('tag_3',25);

            $table->string('desc',5000);
            
            // valore booleano, usato per indicare lo stato di un blog, 0 = non-bloccato, 1 = bloccato
            // un blog bloccato non puo essere visualizzato da utenti 'user'
            $table->boolean('block')->default(0);

            $table->rememberToken();
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
        Schema::dropIfExists('blog');

    }
}
