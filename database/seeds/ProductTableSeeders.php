<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Product::create([
			'title' => 'Macbook Pro 13 2017',
			'description' => 'Seri komputer jinjing Macintosh yang diproduksi oleh Apple',
			'price' => 18500000,
			'stock' => 5
		]);

		Product::create([
			'title' => 'Asus Rog Slim',
			'description' => 'Sebuah brand perangkat keras notebook khusus gaming dari ASUS',
			'price' => 10500000,
			'stock' => 15
		]);

		Product::create([
			'title' => 'HP Probook i7',
			'description' => 'Sebuah brand perangkat keras Laptop khusus perkantoran dari HP',
			'price' => 10500000,
			'stock' => 15
		]);
    }
}
