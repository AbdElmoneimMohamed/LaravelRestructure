<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\Role::class)->create(["name"=>"admin"]);
        factory(App\Entities\Role::class)->create(["name"=>"user"]);
    }
}
