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
            'name'       => 'Linha Amarela 2kg',
            'brand'      => 'Euroroma',
            'value'      => '100',
            'charge'     => '10',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name'       => 'Linha Vermelho 2kg',
            'brand'      => 'Euroroma',
            'value'      => '100',
            'charge'     => '10',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name'       => 'Linha Laranja 2kg',
            'brand'      => 'Euroroma',
            'value'      => '100',
            'charge'     => '10',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
