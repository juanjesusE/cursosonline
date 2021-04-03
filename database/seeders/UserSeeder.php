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
        User::create([
            'name' => 'Juan Jesus Escalera',
            'email' => 'jesus@promocall.mx',
            'password' => bcrypt('12345678')
        ]);

        User::factory(20)->create();
    }
}
