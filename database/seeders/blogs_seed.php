<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blogs_seed extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        DB::table('blogs')->insert([
            'title' => 'Articulo de Prueba',
            'article' => '<p>Hola</p>
                        <ul><li>1 - Messi</li></ul>
                        <p>De paul</p>',
            'picture' => 'Aqui deberia ir una imagen',
            'video' => 'Aqui deberia ir un video',
        ]);
    }
}
