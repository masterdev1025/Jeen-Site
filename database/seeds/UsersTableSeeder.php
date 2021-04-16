<?php

use Illuminate\Database\Seeder;
use App\User;
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
        //
        User::create([
            'name' => 'Ikram Ullah',
            'email' => 'dev@jeen.com',
            'password' => Hash::make('12345678'),
            'userFirst' => 'Ikram',
            'userLast'  => 'Ullah',
            'userPhone' => '',
            'userPosition' => '',
            'userAddress1' => '',
            'userAddress2' => '',
            'userCity'     => '',
            'userState'    => '',
            'userPostal'   => '',
            'userCountry'  => '',
            'registerDate'  => date('Y-m-d H:i:s'),
            'approvalDate'  => date('Y-m-d H:i:s'),
            'userStatus'    => 1,
            'notes'  => ''
        ]);
        User::create([
            'name' => 'Christian Rowe',
            'email' => 'crow@jeen.com',
            'password' => Hash::make('12345678'),
            'userFirst' => 'Christian',
            'userLast'  => 'Rowe',
            'userPhone' => '',
            'userPosition' => '',
            'userAddress1' => '',
            'userAddress2' => '',
            'userCity'     => '',
            'userState'    => '',
            'userPostal'   => '',
            'userCountry'  => '',
            'registerDate'  => date('Y-m-d H:i:s'),
            'approvalDate'  => date('Y-m-d H:i:s'),
            'userStatus'    => 1,
            'notes'  => ''
        ]);
    }
}
