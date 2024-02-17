<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $password= Hash::make('123456');
        $adminRecords=[
            'id' =>1,
            'name' =>'Admin',
            'type' => 'admin',
            'mobile' => 9999999999,
            'email' =>'admin@admin.com',
            'password'=>$password,
            'status'=>1
        ];
        Admin::insert($adminRecords);
    }
}
