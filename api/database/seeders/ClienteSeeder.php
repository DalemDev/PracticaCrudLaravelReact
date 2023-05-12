<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'nombre' => 'Roy',
            'apellido' => 'Garcia',
            'edad' => 17,
            'sexo' => 'Masculino',
            'imagen' => 'https://images.ecestaticos.com/vTc4g_7xb_nSqbTMm7KY0HYv0Yk=/119x87:4983x3534/1200x1200/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F542%2F18c%2F2b9%2F54218c2b95445ae1fea91aca9e37b53e.jpg'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Hilda',
            'apellido' => 'Erazo',
            'edad' => 53,
            'sexo' => 'Masculino',
            'imagen' => 'https://img.freepik.com/foto-gratis/mujer-tranquila-cabello-tenido-pie-manos-cruzadas-sonrisa-sincera-encantadora-demostrando-sus-dientes-perfectos-posando_273609-7675.jpg'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Ismael',
            'apellido' => 'Garcia',
            'edad' => 58,
            'sexo' => 'Masculino',
            'imagen' => 'https://images.ecestaticos.com/vTc4g_7xb_nSqbTMm7KY0HYv0Yk=/119x87:4983x3534/1200x1200/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F542%2F18c%2F2b9%2F54218c2b95445ae1fea91aca9e37b53e.jpg'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Robin',
            'apellido' => 'Rivadeneira',
            'edad' => 21,
            'sexo' => 'Masculino',
            'imagen' => 'https://images.ecestaticos.com/vTc4g_7xb_nSqbTMm7KY0HYv0Yk=/119x87:4983x3534/1200x1200/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F542%2F18c%2F2b9%2F54218c2b95445ae1fea91aca9e37b53e.jpg'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Daniel',
            'apellido' => 'Asanza',
            'edad' => 23,
            'sexo' => 'Masculino',
            'imagen' => 'https://images.ecestaticos.com/vTc4g_7xb_nSqbTMm7KY0HYv0Yk=/119x87:4983x3534/1200x1200/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F542%2F18c%2F2b9%2F54218c2b95445ae1fea91aca9e37b53e.jpg'
        ]);
    }
}
