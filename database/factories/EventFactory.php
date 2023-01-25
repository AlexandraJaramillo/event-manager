<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\events>
 */
class EventFactory extends Factory
{
    
    protected $model = event::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'MAsterClass Vue',
            'date' => $this->faker->date(),
            'time' => '18:00:00',
            'location'=>$this->faker->city(),
            'max_participants' => '15',
            'tags' => 'Vue, Laravel, Docker',
            'description' => $this->faker->paragraph(2),            
            'link' => $this->faker->url(),
            'available' => 'yes',

        ];
    }
}
