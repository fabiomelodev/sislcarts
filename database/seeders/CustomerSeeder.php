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
            [
                'name'         => 'Cacau',
                'slug'         => 'cacau',
                'photo'        => 'photo_68315e926d8ee.png',
                'phone'        => '119999999',
                'contact_type' => 'whatsapp',
                'status'       => 'ativo',
                'user_id'      => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'name'         => 'Toddinho',
                'slug'         => 'toddinho',
                'photo'        => 'photo_68315e926d8ee.png',
                'phone'        => '1199999123',
                'contact_type' => 'whatsapp',
                'status'       => 'ativo',
                'user_id'      => 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ]
        ]);
    }
}
