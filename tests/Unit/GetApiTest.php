<?php

namespace Tests\Unit;

use Tests\TestCase;

class GetTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGet() {
        
        $this->json('get', 'api/getData')
                ->assertStatus(200)
                ->assertJson([
      
        ]);
    }

}
