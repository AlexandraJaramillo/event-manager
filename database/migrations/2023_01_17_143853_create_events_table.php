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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // Relations between users and event...
            //$table->foreignId('user_id')->constrained()->onDelete('cascade');
            //
            $table->string('title');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
