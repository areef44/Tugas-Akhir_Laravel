<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::query()->create([
            "sector_name" => 'Polisi Sektor Dago',
            "address" => 'Jl. Sangkuriang, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
            "district" => 'Dago'
        ]);
    }
}
