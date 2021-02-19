<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        \DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Security',
                'created_at' => '2021-02-18 07:15:55',
                'updated_at' => '2021-02-18 07:15:55',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Health & Safety',
                'created_at' => '2021-02-18 07:15:55',
                'updated_at' => '2021-02-18 07:15:55',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Loss Prevention',
                'created_at' => '2021-02-18 07:15:55',
                'updated_at' => '2021-02-18 07:15:55',
            ),
        ));
    }

}
