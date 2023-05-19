<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name' => 'Customer',
            'email' => 'google@me.cc',
            'phone' => '033212554332',
            'address' => 'isb',
            'password' => Hash::make('123456')
        ]);
    }
}
