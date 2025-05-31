<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'name'         => 'Cacau',
            'photo'        => 'photo_68315e926d8ee.png',
            'phone'        => '119999999',
            'contact_type' => 'whatsapp',
            'user_id'      => 1,
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ]);

        DB::table('customers')->insert([
            'name'         => 'Toddinho',
            'photo'        => 'photo_68315e926d8ee.png',
            'phone'        => '1199999123',
            'contact_type' => 'whatsapp',
            'user_id'      => 1,
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ]);
    }
}
