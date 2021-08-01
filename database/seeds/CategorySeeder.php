<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Motherboard', 'Cabinet', 'RAM', 'Cooling System', 'Monitor', 'Processor', 'Graphic card', 'HDD', 'SSD'];
        foreach($categories as $category) {
            Category::create([
                "name" => $category,
                "description" => 'Lorem ipsum dolor sit amet consectetur, adipiscing elit aliquam rhoncus rutrum, arcu lectus orci mattis. Orci nam volutpat penatibus cum tincidunt odio libero nisl, ac lacus morbi turpis senectus litora est rutrum, tristique mauris hac mus laoreet convallis mi. Commodo litora pellentesque elementum duis cum purus tortor torquent, orci bibendum diam inceptos ac aptent mauris congue, dictumst odio est eleifend gravida justo leo.'
            ]);
        }
    }
}
