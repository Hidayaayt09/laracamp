<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
            'camp_id' => 1,
            'name' => 'Pro Techstack kit'
            ],
            [
            'camp_id' => 1,
            'name' => 'macbook pro 2021'
            ],
             [
            'camp_id' => 1,
            'name' => 'final project'
            ],
             [
            'camp_id' => 1,
            'name' => 'offline course'
            ],
             [
            'camp_id' => 1,
            'name' => 'future job'
            ],
             [
            'camp_id' => 1,
            'name' => 'premium kit'
            ],
             [
            'camp_id' => 1,
            'name' => 'website buider'
            ],
             [
            'camp_id' => 2,
            'name' => 'monitoring program'
            ],
             [
            'camp_id' => 2,
            'name' => 'final project'
            ],
             [
            'camp_id' => 1,
            'name' => 'offline course'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
