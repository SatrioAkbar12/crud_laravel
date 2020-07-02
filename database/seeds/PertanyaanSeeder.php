<?php

use Illuminate\Database\Seeder;
use App\Models\PertanyaanModel;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) {
            PertanyaanModel::insert_seed();
        }
    }
}
