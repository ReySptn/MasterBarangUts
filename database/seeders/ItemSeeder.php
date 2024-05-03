<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Faker\Factory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'Z-961',
            'name' => 'Motherboard B760M',
            'price' => 2700000,
            'desc' => $faker->text(200),
            'stock' => 98
        ]);

        Item::query()->create([
            'unit_id' => 2,
            'code' => 'Z-962',
            'name' => 'Mouse Logitech 304',
            'price' => 450000,
            'desc' => $faker->text(200),
            'stock' => 198
        ]);

        Item::query()->create([
            'unit_id' => 3,
            'code' => 'Z-963',
            'name' => 'Keyboard Rexus Daxa',
            'price' => 750000,
            'desc' => $faker->text(200),
            'stock' => 88
        ]);

        Item::query()->create([
            'unit_id' => 11,
            'code' => 'Z-964',
            'name' => 'Monitor MSI G234Z',
            'price' => 2500000,
            'desc' => $faker->text(200),
            'stock' => 218
        ]);

        Item::query()->create([
            'unit_id' => 1,
            'code' => 'Z-965',
            'name' => 'RTX 4080 Ti 12GB',
            'price' => 5500000,
            'desc' => $faker->text(200),
            'stock' => 150
        ]);
    }
}
