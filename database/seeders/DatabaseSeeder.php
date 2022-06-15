<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pos;
use App\Models\User;
use App\Models\Area;
use App\Models\Sector;
use App\Models\Product;
use App\Models\Routing;
use App\Models\ProductVisit;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        $roles = Role::factory(4)->create();
        $roles = $roles->all();
        $users = User::factory(10)->create();
        foreach($users as $user)
        {
            $user->assignRole($roles[rand(0,3)]->name);
        }

        Area::factory(15)->create();
        Sector::factory(25)->create();
        Routing::factory(30)->create();
        Pos::factory(130)->create();
        Product::factory(135)->create();
        Visit::factory(220)->create();
        ProductVisit::factory(250)->create();

    }
}
