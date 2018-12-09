<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Strap',
            'slug'=> 1,
            'series' => '',
            'case' => '',
            'wood' => '',
            'strap' => '',
            'price' => 200000,

        ]);

        Product::create([
            'name' => 'Strap2',
            'slug'=> 2,
            'series' => '',
            'case' => '',
            'wood' => '',
            'strap' => '',
            'price' => 200000,

        ]);

        Product::create([
            'name' => 'Strap3',
            'slug'=> 3,
            'series' => '',
            'case' => '',
            'wood' => '',
            'strap' =>'',
            'price' => 200000,

        ]);

        Product::create([
            'name' => 'Black Hexagonal Monjali',
            'slug'=> 4,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Maple Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Black Hexagonal Monjali',
            'slug'=> 5,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Maple Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Classic Black Cowhide Leather',
            'slug'=> 6,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Maple Wood',
            'strap' => 'Black Cowhide Leather',
            'price' => 700000,

        ]);

        Product::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 7,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Maple Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 8,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Maple Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Classic Black Cowhide Leather',
            'slug'=> 9,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Maple Wood',
            'strap' => 'Black Cowhide Leather',
            'price' => 700000,

        ]);

        Product::create([
            'name' => 'Black Hexagonal Monjali',
            'slug'=> 10,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Black Hexagonal Monjali',
            'slug'=> 11,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Classic Black Cowhide Leather',
            'slug'=> 12,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Rose Wood',
            'strap' => 'Black Cowhide Leather',
            'price' => 700000,

        ]);

        Product::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 13,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Black Round Toegoe',
            'slug'=> 14,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Classic Black Cowhide Leather',
            'slug'=> 15,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => 'Black Cowhide Leather',
            'price' => 700000,

        ]);

        Product::create([
            'name' => 'White Hexagonal Monjali',
            'slug'=> 16,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'White Hexagonal Monjali',
            'slug'=> 17,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Classic Natural Cowhide Leather',
            'slug'=> 18,
            'series' => 'Monjali',
            'case' => 'Hexagonal',
            'wood' => 'Rose Wood',
            'strap' => 'Natural Cowhide Leather',
            'price' => 700000,

        ]);

        Product::create([
            'name' => 'White Round Toegoe',
            'slug'=> 19,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'White Round Toegoe',
            'slug'=> 20,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => '',
            'price' => 500000,

        ]);

        Product::create([
            'name' => 'Classic Natural Cowhide Leather',
            'slug'=> 21,
            'series' => 'Toegoe',
            'case' => 'Round',
            'wood' => 'Rose Wood',
            'strap' => 'Natural Cowhide Leather',
            'price' => 500000,

        ]);
    }
}
