<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Relations between users and event...
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            //
            $table->string('title');
<<<<<<< HEAD:database/migrations/2023_01_18_184925_create_posts_table.php
            $table->timestamps();
=======
            $table->string('description');
            $table->date('date');
            $table->time('time');
            $table->string('location')->nullable();
            $table->string('max_participants')->nullable();
            $table->string('tags');            
            $table->string('available');
            $table->string('cover')->nullable();
            $table->string('link');           
            $table->timestamps();    
>>>>>>> 41aca358a0d5d66536ec5903c141280665460449:database/migrations/2023_01_15_171052_create_events_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
