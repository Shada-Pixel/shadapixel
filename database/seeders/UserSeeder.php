<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // admin user
        $adminuser = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('admin123'),
        ]);
        $adminrole = Role::where('name','admin')->first();
        $userrole = Role::where('name','user')->first();
        $adminuser->assignRole([$adminrole->id]);



        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('user123'),
            ]);
            $user->assignRole([$userrole->id]);
        }
    }
}
