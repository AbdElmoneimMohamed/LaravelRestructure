<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = App\Entities\Role::where('name', "admin")->first();
        $userRole  = App\Entities\Role::where('name', "user")->first();

        factory(App\Entities\User::class, 1)->create([
            "email"=>"admin@admin.com",
            "password" => bcrypt("adminadmin")
        ]);

        App\Entities\User::find(1)->roles()->save($adminRole);

        factory(App\Entities\User::class, 1)->create([
            "email"=>"user@user.com",
            "password" => bcrypt("useruser")
        ]);
        App\Entities\User::find(2)->roles()->save($userRole);

        factory(App\Entities\User::class, 10)
            ->create(["password" => bcrypt("123456")])
            ->each(function ($u) use ($userRole) {
            $u->roles()->save($userRole);
        });
    }
}
