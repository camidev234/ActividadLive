<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['departament_code' => 'AMA', 'departament_name' => 'Amazonas'],
            ['departament_code' => 'ANT', 'departament_name' => 'Antioquia'],
            ['departament_code' => 'ARA', 'departament_name' => 'Arauca'],
            ['departament_code' => 'ATL', 'departament_name' => 'Atlántico'],
            ['departament_code' => 'BOL', 'departament_name' => 'Bolívar'],
            ['departament_code' => 'BOY', 'departament_name' => 'Boyacá'],
            ['departament_code' => 'CAL', 'departament_name' => 'Caldas'],
            ['departament_code' => 'CAQ', 'departament_name' => 'Caquetá'],
            ['departament_code' => 'CAS', 'departament_name' => 'Casanare'],
            ['departament_code' => 'CAU', 'departament_name' => 'Cauca'],
            ['departament_code' => 'CES', 'departament_name' => 'Cesar'],
            ['departament_code' => 'CHO', 'departament_name' => 'Chocó'],
            ['departament_code' => 'COR', 'departament_name' => 'Córdoba'],
            ['departament_code' => 'CUN', 'departament_name' => 'Cundinamarca'],
            ['departament_code' => 'GUA', 'departament_name' => 'Guainía'],
            ['departament_code' => 'GUV', 'departament_name' => 'Guaviare'],
            ['departament_code' => 'HUI', 'departament_name' => 'Huila'],
            ['departament_code' => 'GUA', 'departament_name' => 'Guajira'],
            ['departament_code' => 'MAG', 'departament_name' => 'Magdalena'],
            ['departament_code' => 'MET', 'departament_name' => 'Meta'],
            ['departament_code' => 'NAR', 'departament_name' => 'Nariño'],
            ['departament_code' => 'NDS', 'departament_name' => 'Norte de Santander'],
            ['departament_code' => 'PUT', 'departament_name' => 'Putumayo'],
            ['departament_code' => 'QUI', 'departament_name' => 'Quindío'],
            ['departament_code' => 'RIS', 'departament_name' => 'Risaralda'],
            ['departament_code' => 'SAP', 'departament_name' => 'San Andrés y Providencia'],
            ['departament_code' => 'SAN', 'departament_name' => 'Santander'],
            ['departament_code' => 'SUC', 'departament_name' => 'Sucre'],
            ['departament_code' => 'TOL', 'departament_name' => 'Tolima'],
            ['departament_code' => 'VAC', 'departament_name' => 'Valle del Cauca'],
            ['departament_code' => 'VAU', 'departament_name' => 'Vaupés'],
            ['departament_code' => 'VID', 'departament_name' => 'Vichada']
        ];


        foreach ($departments as $department) {
            Departament::create([
                'departament_code' => $department['departament_code'],
                'departament_name' => $department['departament_name'],
                'country_id' => 1,
            ]);
        }
    }
}
