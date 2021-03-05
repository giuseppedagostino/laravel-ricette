<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 200);
            $table->string('slug', 200);
            $table->string('img_path');
            $table->string('description');
            $table->timestamps();

            // questa è la tabella secondaria quindi inseriamo la foreign key
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
                // se l'utente viene cancellato le ricette resteranno ma in anonimo, non metto onDelete per non perdere le ricette
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe');
    }
}
