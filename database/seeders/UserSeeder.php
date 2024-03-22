<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::create([
            'nama' => 'admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'alamat'=>'tegal',
            'no_hp'=>'08773771883',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(10),
            'id_level' => Level::find(1)->id,
        ]);
        
        User::create([
            'nama' => 'bank',
            'username' => 'Bank BCA',
            'email' => 'bankbca@gmail.com',
            'no_hp'=>'08773771883',
            'alamat'=>'tegal',
            'email_verified_at' => now(),
            'password' => bcrypt('bankbca123'),
            'remember_token' => Str::random(10),
            'id_level' => Level::find(3)->id,
        ]);

        User::create([
            'nama' => 'bank',
            'username' => 'Bank BNI',
            'email' => 'bankbni@gmail.com',
            'email_verified_at' => now(),
            'no_hp'=>'08773771883',
            'alamat'=>'tegal',
            'password' => bcrypt('bankbni123'),
            'remember_token' => Str::random(10),
            'id_level' => Level::find(3)->id,
        ]);

        User::create([
            'nama' => 'bank',
            'username' => 'Bank Mandiri',
            'email' => 'bankmandiri@gmail.com',
            'email_verified_at' => now(),
            'no_hp'=>'08773771883',
            'alamat'=>'tegal',
            'password' => bcrypt('bankmandiri123'),
            'remember_token' => Str::random(10),
            'id_level' => Level::find(3)->id,
        ]);

        User::create([
            'nama' => 'Customer 1',
            'username' => 'customer_1',
            'email' => 'customer1@gmail.com',
            'alamat'=>'tegal',
            'email_verified_at' => now(),
            'no_hp'=>'08773771883',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'id_level' => Level::find(2)->id,
        ]);
    }
}
