<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_services')->insert([
            [
                'name'       => 'Crochê',
                'slug'       => 'croche',
                'status'     => 'ativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Bordado',
                'slug'       => 'bordado',
                'status'     => 'inativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
