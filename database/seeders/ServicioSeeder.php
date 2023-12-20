<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Servicio;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(1);
        Servicio::create([
            'user_id' => $user->id,
            'titulo' => 'Maquillaje social',
            'subtitulo' => 'Belleza',
            'contenido' => '<p>Destaca tu belleza en ocasiones especiales con nuestro maquillaje social. Ideal para invitadas de bodas, graduaciones, cumpleaños y eventos únicos.</p>
            <ul class="list-inline">
                <li><strong>¿Cuánto dura?</strong> Hasta que decidas lavar tu rostro. </li>
                <li><strong>¿Que incluye el maquillaje?</strong> Incluye pestañas postizas de tira, preparación de piel con productos de alta calidad.</li>
                <li><strong>Cuida tu maquillaje evitando tocar tu rostro directamente y actividades físicas intensas.</strong></li>
            </ul>
            <p><strong>El procedimiento toma aproximadamente 1 hora</strong></p>',
            'imagen' => '1.jpeg',
            'precio' => '110000'
        ]);

        Servicio::create([
            'user_id' => $user->id,
            'titulo' => 'Peinados de gala',
            'subtitulo' => 'Estilo',
            'contenido' => '<p>Realza tu elegancia con nuestros peinados de gala, diseñados para eventos formales ,Sofisticados y adaptados a tu vestuario y estilo personal. </p>
            <p><strong>Utilizamos productos de alta calidad para garantizar la duración en todo tipo de cabello.</strong></p>',
            'imagen' => '2.jpeg',
            'precio' => '80000'
        ]);

        Servicio::create([
            'user_id' => $user->id,
            'titulo' => 'Peinados infantiles',
            'subtitulo' => 'Infatil',
            'contenido' => '<p>Encantadores peinados infantiles para cualquier ocasión: trenzados, encintados, kanekalon y más, incluso peinados para bautizos. </p><p><strong>Aprovecha nuestro Combo Escolar: </strong>4 peinados sencillos al mes por $100.000.</p>',
            'imagen' => '3.jpeg',
            'precio' => '30000'
        ]);

        Servicio::create([
            'user_id' => $user->id,
            'titulo' => 'Manicure y pedicure',
            'subtitulo' => 'Consejos y cuidados',
            'contenido' => '<p><strong> Uñas que Reflejan tu Estilo Único </strong></p>
            <p>Nunca subestimes el poder de unas uñas impecables. En SDBTG, cada servicio de manicure y pedicure es una experiencia de cuidado y belleza completa, garantizando uñas limpias y perfectas. Nuestros servicios incluyen desinfección, limpieza, exfoliación, jelly spa, esmaltado e hidratación.</p>',
            'imagen' => '4.jpeg',
            'precio' => '110000'
        ]);

        Servicio::create([
            'user_id' => $user->id,
            'titulo' => 'Alisado y keratinas',
            'subtitulo' => 'Cuidado del cabello',
            'imagen' => '5.jpeg',
        ]);

        Servicio::create([
            'user_id' => $user->id,
            'titulo' => 'Terapias capilares',
            'subtitulo' => 'Tratamientos',
            'imagen' => '6.jpeg',
        ]);
    }
}
