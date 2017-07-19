<?php

use Illuminate\Database\Seeder;

class JobPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_positions')->insert([
            'name' => 'Nurse',
            'inactive' => 0
        ]);
        DB::table('job_positions')->insert([
            'name' => 'Psychiatrist',
            'inactive' => 0
        ]);
    }
}
