<?php

namespace Database\Factories;

use App\Models\Recruit;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recruitoment;
use Illuminate\Support\Arr;

class RecruitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recruit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $name = $this->faker->word();
            $workplace = ['岩手県','宮城県','福島県','山形県','秋田県','青森県',];
            $salary = ['20万円以上','25万円以上','30万円以上',
        ];

        return [
            'name' => $name,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'recruitoment_id' => Arr::random(Arr::pluck(Recruitoment::all(), 'id')),
            'workplace' => $workplace[array_rand($workplace)],
            'salary' => $salary[array_rand($salary)],
            'note' => 'お客様のＮＯ．１企業｡お客様をサポートする最良のパートナーを目指し、ベストサービス・ベストプロダクトを提供します。お客様の満足向上のため、絶えず創造し、挑戦する会社であり続けます。',
            'img_path' => 'storage/recruit_image/' . rand(1, 12) . '.jpg',
            'latitude' => $this->faker->latitude($min = 39.3956, $max = 39.4845),
            'longitude' => $this->faker->longitude($min = 141.0915, $max = 141.0916),
            ];
      }
  }