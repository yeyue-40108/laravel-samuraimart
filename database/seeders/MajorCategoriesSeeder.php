<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MajorCategory;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_categories_names = [
            '本', 'コンピュータ', 'ディスプレイ'
        ];

        foreach ($major_categories_names as $major_categories_name) {
            MajorCategory::create([
                'name' => $major_categories_name,
                'description' => $major_categories_name,
            ]);
        }
    }
}
