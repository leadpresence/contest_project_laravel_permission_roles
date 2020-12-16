<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Role;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        //trucate user role linking table
        DB::table('role_user')->truncate();

        //get role from role table

        $adminRole=Role::where('name','admin')->first();
        $userRole=Role::where('name','user')->first();
        $judgeRole=Role::where('name','judge')->first();



      $admin=  User::create([
            'email'=>'admin@admin.com',
            'name'=>'Admin User',
            'password'=>Hash::make('password'),
        ]);

        $judge=  User::create([ 
            'email'=>'judge@judge.com',
            'name'=>'Judge User',
            'password'=>Hash::make('password'),
        ]);
        $user=  User::create([
            'email'=>'user@user.com',
            'name'=>'Candidate User',
            'password'=>Hash::make('password'),
        ]);
        //attach role to users
        $admin->roles()->attach($adminRole);
        $judge->roles()->attach($judgeRole);
        $user->roles()->attach($userRole);

    }
}
