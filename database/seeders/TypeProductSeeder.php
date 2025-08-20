<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_products')->insert([
            [
                'name'       => 'Produto A',
                'slug'       => 'produto-a',
                'status'     => 'ativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Produto B',
                'slug'       => 'produto-b',
                'status'     => 'inativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
