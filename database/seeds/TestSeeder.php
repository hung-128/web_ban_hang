<?php

use App\model\Test;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<40; $i++){
            DB::table('tests')->insert([
                'name' => Str::random(10),
            ]);
        }
    }
}
