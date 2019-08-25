<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class Ejemplos_de_muebles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - BAJA',
          'precio'=>12000,
          'material'=>'Petiribí laqueado',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'guardado1.jpg',
        ]);

        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - VAJILLERO',
          'precio'=>10000,
          'material'=>'Madera laqueada y petiribí',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'guardado2.jpg',
        ]);

        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - ALTA',
          'precio'=>9000,
          'material'=>'Petiribí laqueado',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'guardado3.jpg',
        ]);

        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - BAJA',
          'precio'=>12000,
          'material'=>'Petiribí laqueado',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'mesadeluz1.jpg',
        ]);
        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - VAJILLERO',
          'precio'=>10000,
          'material'=>'Madera laqueada y petiribí',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'mesadeluz2.jpg',
        ]);
        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - ALTA',
          'precio'=>9000,
          'material'=>'Petiribí laqueado',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'mesaluz3.jpg',
        ]);
        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - BAJA',
          'precio'=>12000,
          'material'=>'Petiribí laqueado',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'silla1.jpg',
        ]);
        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - VAJILLERO',
          'precio'=>10000,
          'material'=>'Madera laqueada y petiribí',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'silla2.jpg',
        ]);
        DB::table('muebles')->insert([
          'nombre'=>'LINEA EMILIA - ALTA',
          'precio'=>9000,
          'material'=>'Petiribí laqueado',
          'alto'=>80,
          'ancho'=>99,
          'profundidad'=>50,
          'color'=>'Blanco',
          'foto'=>'silla3.jpg',
        ]);

    }
}
