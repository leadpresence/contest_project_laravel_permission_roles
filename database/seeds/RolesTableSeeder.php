<?php

use Illuminate\Database\Seeder;
use App\Model\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        Role::truncate();

        //Create Roles
        //an array create method taking colum name and value    
        Role::create(['name'=>'admin' ]);
        Role::create(['name'=>'user' ]);
        Role::create(['name'=>'judge' ]);

    }
}
