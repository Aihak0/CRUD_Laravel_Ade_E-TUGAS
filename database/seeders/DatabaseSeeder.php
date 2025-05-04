<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nama' => 'Joko',
            'email' => 'joko@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'jabatan' => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
        User::create([
            'nama' => 'ok',
            'email' => 'ok@gmail.com',
            'jabatan' => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

    }
}
