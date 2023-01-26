<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(5)->create();

        Event::factory(6)->create();
        // \App\Models\Event::factory(10)->count(5)->create();
       

        // Events::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Events::create([
        //     'title' => 'Masterclass Docker',
        //     'date' => '27/01/2023',
        //     'time' => '18:30 h',
        //     'max_participants' => '15',
        //     'description' => 'This masterclass is about Docker an probably will see Sonar and Jenkins',
        //     'image' => 'image',
        //     'link' => 'link de la masterclass',
        //     'avalaible' => 'yes'            
        // ]);
    }
}
