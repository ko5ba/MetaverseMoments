<?php

namespace Database\Seeders;

use App\Models\NFT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NFTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NFT::factory(100)->create();
    }
}
