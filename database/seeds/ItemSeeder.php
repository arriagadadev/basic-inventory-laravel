<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyDescription = 'Lorem ipsum dolor sit amet consectetur, adipiscing elit aliquam rhoncus rutrum, arcu lectus orci mattis. Orci nam volutpat penatibus cum tincidunt odio libero nisl, ac lacus morbi turpis senectus litora est rutrum, tristique mauris hac mus laoreet convallis mi. Commodo litora pellentesque elementum duis cum purus tortor torquent, orci bibendum diam inceptos ac aptent mauris congue, dictumst odio est eleifend gravida justo leo.';
        Item::create([
            "name" => "ASUS ROG STRIX Z490-E Gaming",
            "description" => $dummyDescription,
            "category_id" => 1,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        Item::create([
            "name" => "ASUS PRIME B550M-A (WI-FI)",
            "description" => $dummyDescription,
            "category_id" => 1,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        Item::create([
            "name" => "ASUS PRIME B550M-A AMD B550",
            "description" => $dummyDescription,
            "category_id" => 1,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);

        Item::create([
            "name" => "Cooler Master Masterbox K501L RGB (ATX)",
            "description" => $dummyDescription,
            "category_id" => 2,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        Item::create([
            "name" => "MSI MAG FORGE 100M (ATX)",
            "description" => $dummyDescription,
            "category_id" => 2,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);

        Item::create([
            "name" => "Corsair Vengeance LPX 8GB (8GBx1) 3200MHz DDR4",
            "description" => $dummyDescription,
            "category_id" => 3,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        Item::create([
            "name" => "Corsair 8GB DDR4 CMK8GX4M1D3000C16 3000MHz",
            "description" => $dummyDescription,
            "category_id" => 3,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);

        Item::create([
            "name" => "ASUS TUF Gaming VG27AQ 27 Inch",
            "description" => $dummyDescription,
            "category_id" => 5,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        Item::create([
            "name" => "BenQ ZOWIE XL2411P 144Hz 24 inch",
            "description" => $dummyDescription,
            "category_id" => 5,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        
        Item::create([
            "name" => "ZOTAC GAMING GeForce GTX 1660 SUPER Twin Fan 6GB GDDR6",
            "description" => $dummyDescription,
            "category_id" => 7,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
        Item::create([
            "name" => "GALAX GeForce GTX 1050 Ti (1-Click OC) 128-bit DDR5",
            "description" => $dummyDescription,
            "category_id" => 7,
            "quantity" => mt_rand(20, 1500),
            "price_tax_excluded" => rand(55, 755),
            "status" => mt_rand(0,1) == 1
        ]);
    }
}
