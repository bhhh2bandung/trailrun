<?php

use Illuminate\Database\Seeder;

class KelaminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelamins')->insert([
            'judul' => 'Laki - laki',
            'kode' => 'F',
            'keterangan' => 'Jenis kelamin untuk laki - laki',
        ]);
        DB::table('kelamins')->insert([
            'judul' => 'Perempuan',
            'kode' => 'M',
            'keterangan' => 'Jenis kelamin untuk perempuan',
        ]);
        
    }
}
