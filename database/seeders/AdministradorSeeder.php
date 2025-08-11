<?php

namespace Database\Seeders;

use App\Models\Administrador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrador = [
          'nombres' => 'EDGAR ABRAHAM',
          'apellidos' => 'CRUZ OCHOA',
          'curp' => 'CUOEQWSDF567UJHYTG',
          'sexo' => 'Masculino',
          'calle' => 'CALLE TINGUINDIN PTE',
          'numero' => '326',
          'codigo_postal' => '45402',
          'colonia' => 'LOMA DORADA',
          'cuidad' => 'TONALA',
          'estado' => 'JALISCO',
          'dia_nac' => '03',
          'mes_nac' => '09',
          'ano_nac' => '2005',
          'correo' => 'ecruz0309@outlook.com',
          'rfc' => 'CUOEQWSDF56712',
          'telefono' => '3317017364',
          'password' => Hash::make('3317017364Ab'),
        ];

        Administrador::create($administrador);
    }
}
