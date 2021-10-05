<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruits')->insert([
            [
                'name' => '株式会社 SPARTA',
                'address' => '〒0287111 岩手県八幡平市大更35-62',
                'phone' => '012-3456-7890',
                'recruitment' => '事務職',
                'workplace' => '岩手県',
                'salary' => '20万円',
                'note' => 'お客様のＮＯ．１企業｡お客様をサポートする最良のパートナーを目指し、ベストサービス・ベストプロダクトを提供します。お客様の満足向上のため、絶えず創造し、挑戦する会社であり続けます。',
                'img_path' =>'',
                'latitude' =>'',
                'longitude' =>'',
            ],
            [
                'name' => '株式会社 八幡平',
                'address' => '〒0287111 岩手県八幡平市大更35-62',
                'phone' => '012-3456-7890',
                'recruitment' => '営業職',
                'workplace' => '岩手県',
                'salary' => '25万円',
                'note' => '社会にとって必要不可欠な会社でありたい｡弊社は優れた技術の創出とＩＴがもつ限りない可能性の追求で、お客様に愛され信頼される会社であることを目標としています。',
                'img_path' =>'',
                'latitude' =>'',
                'longitude' =>'',
            ],
        ]);
    }
}
