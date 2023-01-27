<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;


class EventTest extends TestCase
{
    use RefreshDatabase;

     /** @test */
     public function list_of_events_can_be_retrieved()
     {
        $this->withoutExceptionHandling();
        
        //Datos de prueba EventFactory
        Event::factory(5)->create();

        //Método HTTP
        $response = $this->get('/events');

        $response->assertOk();
        $events = Event::all();

        //Comparar en la vista los valores
        $response->assetViewIs('events.index');
        $response->assertViewHas('events', $events);

     }

     /** @test */
     public function a_events_can_be_retrieved()
     {
        $this->withoutExceptionHandling();
        
        //Datos de prueba EventFactory
        $event = Event::factory(1)->create();

        //Método HTTP - llamar a la ruta
        $response = $this->get('/events/{$event->id}');

        $response->assertOk();
        $event = Event::first();

        //Comparar en la vista los valores
        $response->assetViewIs('events.show');
        $response->assertViewHas('event', $event);

     }


     /** @test */
    public function event_can_be_created()
    {   
        $this->withoutExceptionHandling();
        
        $response = $this->post('/events', [
        'title' => 'Test Title',
        'description' => 'Test Description',
        ]);

        //$response->assertOk();

        $this->assertCount(1, Event::all());

        $event = Event::first();

        $this->assertEquals($event->title, 'Test Title');
        $this->assertEquals($event->descrption, 'Test Description');

        $response->assertRedirect('/events');
    }

    /** @test */
    public function event_can_be_update()
    {   
        $this->withoutExceptionHandling();

        $event = Event::factory(1)->create();
        
        $response = $this->put('/events/{$event[0]->id}', [
        'title' => 'Test Title',
        'description' => 'Test Description',
        ]);

        $event = Event::findOrFail($event[0]->id);

        $this->assertCount(1, Event::all());

        $event = $event->fresh();


        //Comparar valores
        $this->assertEquals($event->title, 'Test Title');
        $this->assertEquals($event->descrption, 'Test Description');

        //Redirije a la vista individual del evento actualizado

        $response->assertRedirect('/events/{$event->id}');

    }

    /** @test */
    public function event_can_be_retrieved()
    {   
        $this->withoutExceptionHandling();

        $event = Event::factory(1)->create();
        
        $response = $this->get('/events/{$event[0]->id}');

        $response->assertOk();

        $event = Event::first();

        $response->assertViewIs('events.show');
        $response->assertViewHas('event', $event);

        //Comparar valores
        $this->assertEquals($event->title, 'Test Title');
        $this->assertEquals($event->descrption, 'Test Description');

        //Redirije a la vista individual del evento actualizado

        $response->assertRedirect('/events/{$event->id}');

    }

    /** @test */
    public function event_can_be_deleted()
    {   
        $this->withoutExceptionHandling();

        $event = Event::factory(1)->create(); //datos de prueba
        
        $response = $this->delete('/events/{$event->id}');

        $this->assertCount(0, Event::all());

        //Redirije a la vista individual del evento actualizado

        $response->assertRedirect('/events');

    }

    /** @test */
    public function event_title_is_required()
    {   
        
        $response = $this->post('/events', [
        'title' => '',
        'description' => 'Test Description',
        ]);

        $response->assertSessionHasErrors(['title']);
    }

    /** @test */
    public function event_description_is_required()
    {   
        
        $response = $this->post('/events', [
        'title' => 'Test Title',
        'description' => '',
        ]);

        $response->assertSessionHasErrors(['description']);
    }


}
