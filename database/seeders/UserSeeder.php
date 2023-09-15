<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carlos Avalos Chuyes',
            'email' =>  'Carlosccd@ccd.com',
            'password' => bcrypt('Carlosccd'),
            
        ])->assignRole('Admin');
        User::factory(1)->create();

    }
}
