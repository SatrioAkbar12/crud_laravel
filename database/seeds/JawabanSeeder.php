<?php

use Illuminate\Database\Seeder;
use App\Models\JawabanModel;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) {
            JawabanModel::insert_seed();
        }
    }
}
