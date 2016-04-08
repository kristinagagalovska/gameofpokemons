<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vesna',
            'fullname' => 'Vesna Gagalovska',
            'bday' => '1988-05-05',
            'image' => 'C:\perfect-server\nginx\temp\php1E16.tmp',
            'admin' => '1',
            'email' => 'vesnagagalovska@gmail.com',
            'password' => bcrypt('vesna123'),
        ]);
    }
}
