<?php

namespace Database\Seeders;

use App\Models\Police;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Police::query()->create([
            "police_name" => 'Briptu Isman',
            "photo" => 'isman.jpg',
            "id_sector" => '1',
            "email" => 'isman@gmail.com',
            "password" => 'isman123'
        ]);
    }
}
