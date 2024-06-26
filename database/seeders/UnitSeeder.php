<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collectUnit = [
            'Satuan',
            'Unit',
            'Pasang',
            'Paket',
            'Keping',
        ];

        foreach ($collectUnit as $key => $name) {
            Unit::query()->create([
                'code' => $key+1,
                'name' => $name
            ]);
        }

    }
}
