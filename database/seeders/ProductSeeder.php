<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'       => 'Linha Amarela 2kg',
                'slug'       => 'linha-amarela-2kg',
                'brand'      => 'Euroroma',
                'value'      => '100',
                'charge'     => '10',
                'status'     => 'ativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Linha Vermelho 2kg',
                'slug'       => 'linha-vermelho-2kg',
                'brand'      => 'Euroroma',
                'value'      => '100',
                'charge'     => '10',
                'status'     => 'ativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Linha Laranja 2kg',
                'slug'       => 'linha-laranja-2kg',
                'brand'      => 'Euroroma',
                'value'      => '100',
                'charge'     => '10',
                'status'     => 'ativo',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
