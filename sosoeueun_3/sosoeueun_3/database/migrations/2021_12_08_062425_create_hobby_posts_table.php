<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobbyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby_posts', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('to_hobbies_id')
            ->constrained('to_hobbies') 
            ->onDelete('cascade');
            
            $table->string('image');
            $table->string('comment');
            
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
        Schema::dropIfExists('hobby_posts');
    }
}
