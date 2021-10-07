<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecruitomentSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('recruitoments')->first()) {
            DB::table('recruitoments')->insert([
                ['name' => '営業職'],
                ['name' => '事務職'],
                ['name' => '総合職'],
            ]);
        }
    }
}
