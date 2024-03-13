<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Datos de los municipios y corregimientos de Amazonas
        $cities = [
            ['city_code' => 'LTR', 'city_name' => 'Leticia'],
            ['city_code' => 'PRT', 'city_name' => 'Puerto Nariño'],
            ['city_code' => 'CAQ', 'city_name' => 'La Chorrera'],
            ['city_code' => 'TLL', 'city_name' => 'El Encanto'],
            ['city_code' => 'PRM', 'city_name' => 'La Pedrera'],
            ['city_code' => 'TKC', 'city_name' => 'Tarapacá'],
            ['city_code' => 'PAR', 'city_name' => 'Puerto Arica'],
            ['city_code' => 'PSA', 'city_name' => 'Puerto Santander'],
            ['city_code' => 'SAE', 'city_name' => 'San Antonio del Estrecho'],
            ['city_code' => 'SFE', 'city_name' => 'San Felipe'],
            ['city_code' => 'MIR', 'city_name' => 'Mirití-Paraná'],
            ['city_code' => 'ALE', 'city_name' => 'Puerto Alegría'],
            ['city_code' => 'COL', 'city_name' => 'Puerto Colombia'],
            ['city_code' => 'HUA', 'city_name' => 'Puerto Huámar'],
            ['city_code' => 'LIB', 'city_name' => 'Puerto Liberty'],
            ['city_code' => 'MER', 'city_name' => 'Puerto Merizalde'],
            ['city_code' => 'MUR', 'city_name' => 'Puerto Murri'],
            ['city_code' => 'RICO', 'city_name' => 'Puerto Rico'],
            ['city_code' => 'SAN', 'city_name' => 'Puerto Santander'], // Duplicado
            ['city_code' => 'TAR', 'city_name' => 'Tarapacá'], // Duplicado
        ];

        // Insertar los municipios y corregimientos en la tabla
        foreach ($cities as $city) {
            City::create([
                'city_code' => $city['city_code'],
                'city_name' => $city['city_name'],
                'departament_id' => 1, // ID del departamento de Amazonas
            ]);
        }

        $antioquiaCities = [
            ['city_code' => 'MEDELLIN', 'city_name' => 'Medellín', 'departament_id' => 2],
            ['city_code' => 'ABEJORRAL', 'city_name' => 'Abejorral', 'departament_id' => 2],
            ['city_code' => 'ABRIAQUI', 'city_name' => 'Abriaquí', 'departament_id' => 2],
            ['city_code' => 'ALEJANDRIA', 'city_name' => 'Alejandría', 'departament_id' => 2],
            ['city_code' => 'AMAGA', 'city_name' => 'Amagá', 'departament_id' => 2],
            ['city_code' => 'AMALFI', 'city_name' => 'Amalfi', 'departament_id' => 2],
            ['city_code' => 'ANDES', 'city_name' => 'Andes', 'departament_id' => 2],
            ['city_code' => 'ANGELOPOLIS', 'city_name' => 'Angelópolis', 'departament_id' => 2],
            ['city_code' => 'ANGOSTURA', 'city_name' => 'Angostura', 'departament_id' => 2],
            ['city_code' => 'ANORI', 'city_name' => 'Anorí', 'departament_id' => 2],
            ['city_code' => 'SANTAFEDEANTIOQUIA', 'city_name' => 'Santa Fe de Antioquia', 'departament_id' => 2],
            ['city_code' => 'ANZA', 'city_name' => 'Anzá', 'departament_id' => 2],
            ['city_code' => 'APARTADO', 'city_name' => 'Apartadó', 'departament_id' => 2],
            ['city_code' => 'ARBOLETES', 'city_name' => 'Arboletes', 'departament_id' => 2],
            ['city_code' => 'ARGELIA', 'city_name' => 'Argelia', 'departament_id' => 2],
            ['city_code' => 'ARMENIA', 'city_name' => 'Armenia', 'departament_id' => 2],
            ['city_code' => 'BARBOSA', 'city_name' => 'Barbosa', 'departament_id' => 2],
            ['city_code' => 'BELMIRA', 'city_name' => 'Belmira', 'departament_id' => 2],
            ['city_code' => 'BELLO', 'city_name' => 'Bello', 'departament_id' => 2],
            ['city_code' => 'BETANIA', 'city_name' => 'Betania', 'departament_id' => 2],
            ['city_code' => 'BETULIA', 'city_name' => 'Betulia', 'departament_id' => 2],
            ['city_code' => 'CIUDADBOLIVAR', 'city_name' => 'Ciudad Bolívar', 'departament_id' => 2],
            ['city_code' => 'BRICEÑO', 'city_name' => 'Briceño', 'departament_id' => 2],
            ['city_code' => 'BURITICA', 'city_name' => 'Buriticá', 'departament_id' => 2],
            ['city_code' => 'CACERES', 'city_name' => 'Cáceres', 'departament_id' => 2],
            ['city_code' => 'CAICEDO', 'city_name' => 'Caicedo', 'departament_id' => 2],
            ['city_code' => 'CALDAS', 'city_name' => 'Caldas', 'departament_id' => 2],
            ['city_code' => 'CAMPAMENTO', 'city_name' => 'Campamento', 'departament_id' => 2],
            ['city_code' => 'CAÑASGORDAS', 'city_name' => 'Cañasgordas', 'departament_id' => 2],
            ['city_code' => 'CARACOLI', 'city_name' => 'Caracolí', 'departament_id' => 2],
            ['city_code' => 'CARAMANTA', 'city_name' => 'Caramanta', 'departament_id' => 2],
            ['city_code' => 'CAREPA', 'city_name' => 'Carepa', 'departament_id' => 2],
            ['city_code' => 'CARMENDEVIBORAL', 'city_name' => 'Carmen de Viboral', 'departament_id' => 2],
            ['city_code' => 'CAROLINA', 'city_name' => 'Carolina', 'departament_id' => 2],
            ['city_code' => 'CAUCASIA', 'city_name' => 'Caucasia', 'departament_id' => 2],
            ['city_code' => 'CHIGORODO', 'city_name' => 'Chigorodó', 'departament_id' => 2],
            ['city_code' => 'CISNEROS', 'city_name' => 'Cisneros', 'departament_id' => 2],
            ['city_code' => 'COCORNA', 'city_name' => 'Cocorná', 'departament_id' => 2],
            ['city_code' => 'CONCEPCION', 'city_name' => 'Concepción', 'departament_id' => 2],
            ['city_code' => 'CONCORDIA', 'city_name' => 'Concordia', 'departament_id' => 2],
            ['city_code' => 'COPACABANA', 'city_name' => 'Copacabana', 'departament_id' => 2],
            ['city_code' => 'DABEIBA', 'city_name' => 'Dabeiba', 'departament_id' => 2],
            ['city_code' => 'DONMATIAS', 'city_name' => 'Donmatías', 'departament_id' => 2],
            ['city_code' => 'EBEJICO', 'city_name' => 'Ebejico', 'departament_id' => 2],
            ['city_code' => 'ELBAGRE', 'city_name' => 'El Bagre', 'departament_id' => 2],
            ['city_code' => 'ENTRERRIOS', 'city_name' => 'Entrerrios', 'departament_id' => 2],
            ['city_code' => 'ENVIGADO', 'city_name' => 'Envigado', 'departament_id' => 2],
            ['city_code' => 'FREDONIA', 'city_name' => 'Fredonia', 'departament_id' => 2],
            ['city_code' => 'FRONTINO', 'city_name' => 'Frontino', 'departament_id' => 2],
            ['city_code' => 'GIRALDO', 'city_name' => 'Giraldo', 'departament_id' => 2],
            ['city_code' => 'GIRARDOTA', 'city_name' => 'Girardota', 'departament_id' => 2],
            ['city_code' => 'GOMEZPLATA', 'city_name' => 'Gómez Plata', 'departament_id' => 2],
            ['city_code' => 'GRANADA', 'city_name' => 'Granada', 'departament_id' => 2],
            ['city_code' => 'GUADALUPE', 'city_name' => 'Guadalupe', 'departament_id' => 2],
            ['city_code' => 'GUARNE', 'city_name' => 'Guarne', 'departament_id' => 2],
            ['city_code' => 'GUATAPE', 'city_name' => 'Guatapé', 'departament_id' => 2],
            ['city_code' => 'HELICONIA', 'city_name' => 'Heliconia', 'departament_id' => 2],
            ['city_code' => 'HISPANIA', 'city_name' => 'Hispania', 'departament_id' => 2],
            ['city_code' => 'ITAGUI', 'city_name' => 'Itagüí', 'departament_id' => 2],
            ['city_code' => 'ITUANGO', 'city_name' => 'Ituango', 'departament_id' => 2],
            ['city_code' => 'JARDIN', 'city_name' => 'Jardín', 'departament_id' => 2],
            ['city_code' => 'JERICO', 'city_name' => 'Jericó', 'departament_id' => 2],
            ['city_code' => 'LAESTRELLA', 'city_name' => 'La Estrella', 'departament_id' => 2],
            ['city_code' => 'LAMESA', 'city_name' => 'La Mesa', 'departament_id' => 2],
            ['city_code' => 'LAPIOJARROS', 'city_name' => 'La Pintada', 'departament_id' => 2],
            ['city_code' => 'LAUNION', 'city_name' => 'La Unión', 'departament_id' => 2],
            ['city_code' => 'LIBORINA', 'city_name' => 'Liborina', 'departament_id' => 2],
            ['city_code' => 'MACEO', 'city_name' => 'Maceo', 'departament_id' => 2],
            ['city_code' => 'MARINILLA', 'city_name' => 'Marinilla', 'departament_id' => 2],
            ['city_code' => 'MONTEBELLO', 'city_name' => 'Montebello', 'departament_id' => 2],
            ['city_code' => 'MURINDO', 'city_name' => 'Murindó', 'departament_id' => 2],
            ['city_code' => 'MUTATA', 'city_name' => 'Mutatá', 'departament_id' => 2],
            ['city_code' => 'NARINO', 'city_name' => 'Nariño', 'departament_id' => 2],
            ['city_code' => 'NECOCLI', 'city_name' => 'Necoclí', 'departament_id' => 2],
            ['city_code' => 'NECHI', 'city_name' => 'Nechí', 'departament_id' => 2],
            ['city_code' => 'OLAYA', 'city_name' => 'Olaya', 'departament_id' => 2],
            ['city_code' => 'PEÐOL', 'city_name' => 'Peñol', 'departament_id' => 2],
            ['city_code' => 'PEQUE', 'city_name' => 'Peque', 'departament_id' => 2],
            ['city_code' => 'PUEBLORICO', 'city_name' => 'Pueblo Rico', 'departament_id' => 2],
            ['city_code' => 'PUERTOBERRIO', 'city_name' => 'Puerto Berrío', 'departament_id' => 2],
            ['city_code' => 'PUERTONARE', 'city_name' => 'Puerto Nare', 'departament_id' => 2],
            ['city_code' => 'PUERTOTRIUNFO', 'city_name' => 'Puerto Triunfo', 'departament_id' => 2],
            ['city_code' => 'REMEDIOS', 'city_name' => 'Remedios', 'departament_id' => 2],
            ['city_code' => 'RETIRO', 'city_name' => 'Retiro', 'departament_id' => 2],
            ['city_code' => 'RIONEGRO', 'city_name' => 'Rionegro', 'departament_id' => 2],
            ['city_code' => 'SABANALARGA', 'city_name' => 'Sabanalarga', 'departament_id' => 2],
            ['city_code' => 'SABANETA', 'city_name' => 'Sabaneta', 'departament_id' => 2],
            ['city_code' => 'SALGAR', 'city_name' => 'Salgar', 'departament_id' => 2],
            ['city_code' => 'SANANDRESDECUERQUIA', 'city_name' => 'San Andrés de Cuerquía', 'departament_id' => 2],
            ['city_code' => 'SANCARLOS', 'city_name' => 'San Carlos', 'departament_id' => 2],
            ['city_code' => 'SANFRANCISCO', 'city_name' => 'San Francisco', 'departament_id' => 2],
            ['city_code' => 'SANJERONIMO', 'city_name' => 'San Jerónimo', 'departament_id' => 2],
            ['city_code' => 'SANJOSEDEMONTERIA', 'city_name' => 'San José de la Montaña', 'departament_id' => 2],
            ['city_code' => 'SANJUANDEURABA', 'city_name' => 'San Juan de Urabá', 'departament_id' => 2],
            ['city_code' => 'SANLUIS', 'city_name' => 'San Luis', 'departament_id' => 2],
            ['city_code' => 'SANPEDRO', 'city_name' => 'San Pedro', 'departament_id' => 2],
            ['city_code' => 'SANPEDRODEURABA', 'city_name' => 'San Pedro de Urabá', 'departament_id' => 2],
            ['city_code' => 'SANRAFAEL', 'city_name' => 'San Rafael', 'departament_id' => 2],
            ['city_code' => 'SANROQUE', 'city_name' => 'San Roque', 'departament_id' => 2],
            ['city_code' => 'SANSALVADOR', 'city_name' => 'San Salvador', 'departament_id' => 2],
            ['city_code' => 'SANTA BARBARA', 'city_name' => 'Santa Bárbara', 'departament_id' => 2],
            ['city_code' => 'SANTADOMINGO', 'city_name' => 'Santa Domingo', 'departament_id' => 2],
            ['city_code' => 'SANTAFEDERIOSUCIO', 'city_name' => 'Santa Fe de Antioquia', 'departament_id' => 2],
            ['city_code' => 'SANTAFESDEANTIOQUIA', 'city_name' => 'Santa Fé de Antioquia', 'departament_id' => 2],
            ['city_code' => 'SANTO', 'city_name' => 'Santo Domingo', 'departament_id' => 2],
            ['city_code' => 'SANTUARIO', 'city_name' => 'Santuario', 'departament_id' => 2],
            ['city_code' => 'SEGOVIA', 'city_name' => 'Segovia', 'departament_id' => 2],
            ['city_code' => 'SONSON', 'city_name' => 'Sonson', 'departament_id' => 2],
            ['city_code' => 'SOPETRAN', 'city_name' => 'Sopetrán', 'departament_id' => 2],
            ['city_code' => 'TAMESIS', 'city_name' => 'Támesis', 'departament_id' => 2],
            ['city_code' => 'TARAZA', 'city_name' => 'Tarazá', 'departament_id' => 2],
            ['city_code' => 'TARSO', 'city_name' => 'Tarso', 'departament_id' => 2],
            ['city_code' => 'TITIRIBI', 'city_name' => 'Titiribí', 'departament_id' => 2],
            ['city_code' => 'TOLEDO', 'city_name' => 'Toledo', 'departament_id' => 2],
            ['city_code' => 'TURBO', 'city_name' => 'Turbo', 'departament_id' => 2],
            ['city_code' => 'URAMITA', 'city_name' => 'Uramita', 'departament_id' => 2],
            ['city_code' => 'URRAO', 'city_name' => 'Urrao', 'departament_id' => 2],
            ['city_code' => 'VALDIVIA', 'city_name' => 'Valdivia', 'departament_id' => 2],
            ['city_code' => 'VALPARAISO', 'city_name' => 'Valparaíso', 'departament_id' => 2],
            ['city_code' => 'VEGACHI', 'city_name' => 'Vegachí', 'departament_id' => 2],
            ['city_code' => 'VENECIA', 'city_name' => 'Venecia', 'departament_id' => 2],
            ['city_code' => 'VIGIADELFUERTE', 'city_name' => 'Vigía del Fuerte', 'departament_id' => 2],
            ['city_code' => 'YALI', 'city_name' => 'Yalí', 'departament_id' => 2],
            ['city_code' => 'YARUMAL', 'city_name' => 'Yarumal', 'departament_id' => 2],
            ['city_code' => 'YOLOMBO', 'city_name' => 'Yolombó', 'departament_id' => 2],
            ['city_code' => 'YONDO', 'city_name' => 'Yondó', 'departament_id' => 2],
            ['city_code' => 'ZARAGOZA', 'city_name' => 'Zaragoza', 'departament_id' => 2],
        ];

        
        DB::table('cities')->insert($antioquiaCities);
    }

}
