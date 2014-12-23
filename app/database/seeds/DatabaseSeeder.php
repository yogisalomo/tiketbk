<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
		$this->call('UsersTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('BestSellingsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('BrandsTableSeeder');
		$this->call('MenuItemsTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('SuppliersTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('BannerImagesTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('PaymentMethodsTableSeeder');
	}


}
