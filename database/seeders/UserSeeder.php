<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ProfileUsers;
use App\Models\Timeline;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create admin
        User::create([
            'name' => 'Amelia | Admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Administrator',
            'created_at' => now()
        ]);
        ProfileUsers::create([
            'user_id' => 1,
            'nama' => 'Amelia | Admin',
            'email' => 'admin@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 1,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);

        User::create([
            'name' => ' Amelia | User',
            'password' => Hash::make('12345678'),
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'role' => 'Calon Mahasiswa',
            'created_at' => now()
        ]);

        ProfileUsers::create([
            'user_id' => 2,
            'nama' => 'Amelia | User',
            'email' => 'user@gmail.com',
            'created_at' => now()
        ]);
        Timeline::create([
            'user_id' => 2,
            'status' => "Bergabung",
            'pesan' => 'Membuat Akun baru',
            'tgl_update' => now(),
            'created_at' => now()
        ]);

    }
}
