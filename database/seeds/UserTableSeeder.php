<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
    use App\User;
    use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = new User;
            $user->name = 'John Doe';
            $user->email = 'johndoe@doe.com';
            $user->password = bcrypt('johnny1234');
            $user->save();
            $user->roles()->attach(Role::where('name', 'user')->first());

            $admin = new User;
            $admin->name = 'Wacu Mbugua';
            $admin->email = 'wm@laravel.com';
            $admin->password = bcrypt('admin1234');
            $admin->save();
            $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
