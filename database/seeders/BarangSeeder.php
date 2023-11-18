<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// insert data ke table barang
        DB::table('barang')->insert([
        	'nama_barang' => 'kipas',
        	'harga' => '500000',
        	'stok' => '25'
        ]);
        
    }
}