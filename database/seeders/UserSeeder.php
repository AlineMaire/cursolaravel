<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'codpes' => '123456',
            'email' => 'xxx@usp.br',
            'name' => 'Fulano da Silva',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_admin' => TRUE
        ];

        \App\Models\User::create($user);
        \App\Models\User::factory(5);
    
    }
}
 