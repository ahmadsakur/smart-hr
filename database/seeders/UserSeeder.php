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
        $admin = User::create([
            'name' => 'HR',
            'email'  => 'hrd@smarthr.com',
            'password' => bcrypt('hrd12345')
        ]);

        $admin->assignRole('hrd');

        $user = User::create([
            'name' => 'Applicants',
            'email'  => 'applicants@smarthr.com',
            'password' => bcrypt('app12345')
        ]);

        $user->assignRole('applicants');
    }
}
