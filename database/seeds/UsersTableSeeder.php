<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'branch_code' => '000',
                'name' => 'admin',
                'email' => 'admin@local.com',
                'level' => 'admin',
                'designation' => 'admin',
                'email_verified_at' => NULL,
                'isAdmin' => 1,
                'isAgent' => 0,
                'password' => '$2y$10$SHErg6KmtKqYSpLIi0DtDusQwnH16Wm0H/HRFsKXQ3H1whid/uKsO',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}