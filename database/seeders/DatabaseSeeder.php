<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BainamoUser;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        BainamoUser::factory()->count(30)->create();
    }
}
