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
        factory(App\Category::class, 2)->create();

        //
        // DB::table('categories')->insert([
        //     'name' => 'Distributor'

        // ]);
        // DB::table('categories')->insert([
        //     'name' => 'Customer'

        // ]);
    }
}
