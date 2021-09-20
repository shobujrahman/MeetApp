<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesRecords = [
            ['category_name'=>'Haunted',
            'category_image'=>"{{url('images/admin_images/photo1.png') }}",
        ],
            ['category_name'=>'Love',
            'category_image'=>"{{url('images/admin_images/photo2.png') }}",
        ],
        ];
        Category::insert($categoriesRecords);
    }
}
