<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lukas',
            'email' => 'lukas@example.com',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'PT Adyawinsa Stamping Industries',
            'email' => 'marketing_asi@adyawinsa.com',
            'address' => 'Jl. Surotokunto Jl. Aria Adiarsa No. 109, Warungbambu, Kec. Karawang Tim, Karawang, Jawa Barat 41313',
            'latitude' => '-6.32602',
            'longitude' => '107.32745',
            'radius_km' => '0.5',
            'time_in' => '07:30',
            'time_out' => '16:30',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
