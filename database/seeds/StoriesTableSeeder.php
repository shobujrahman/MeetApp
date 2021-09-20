<?php

use Illuminate\Database\Seeder;
use App\Story;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storiesRecords = [
            ['id'=>1,
            'parent_id' => 0,
            'category_id' =>1,
            'story_title'=>'Jack & Roses Loves Story',
            'story_description' =>'lorem ipsum',
            'story_image' =>'/public/images/admin_images/photo3.jpg',
            'video_url' =>'',
            
            'content_type' =>'post',
        ],
            ['id'=>2,
            'parent_id' => 1,
            'cat_id' =>1,
            'story_title'=>'Laila & Mojnus Loves Story',
            'story_description' =>'lorem ipsum',
            'story_image' =>'/public/images/admin_images/prod-4.jpg',
            'video_url' =>'',
            
            'content_type' =>'post',
        ],
            
        ];
        Story::insert($storiesRecords);
    }
}
