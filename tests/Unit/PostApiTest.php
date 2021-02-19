<?php

namespace Tests\Unit;

use Tests\TestCase;

class PostTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPost() {
        $data = ["id"=> 0,
      "location" => [
        "latitude" => 12.9231501,
        "longitude" => 74.7818517
      ],
      "title" => "incident title",
      "category_id" => 1,
      "people" => [[
          "name" => "Name of person",
          "type"=> "staff",
          "name" => "Name of person",
          "type" => "witness"
        ],
        [
          "name" => "Name of person",
          "type" => "staff"
        ]
      ],
      "comments" => "This is a string of comments",
      "incidentDate"=> "2020-09-01T13:26:00+00:00",
      "createDate" => "2020-09-01T13:32:59+01:00",
      "modifyDate" => "2020-09-01T13:32:59+01:00"];
        $this->json('POST', 'api/saveData', $data)
                ->assertStatus(200)
                ->assertJson([
      
        ]);
    }

}
