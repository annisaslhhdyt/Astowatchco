<?php

use Illuminate\Database\Seeder;
use App\Toegoe;

class ToegoeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Toegoe::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 7,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Maple Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Toegoe::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 8,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Maple Wood',
            'strap' => '',
            'price' => 500000,

        ]);


        Toegoe::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 13,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Toegoe::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 14,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

    
        Toegoe::create([
            'name' => 'White Round Toegoe',
            'slug'=> 19,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Toegoe::create([
            'name' => 'White Round Toegoe',
            'slug'=> 20,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);
    }
}
