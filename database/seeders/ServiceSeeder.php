<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{

    public function run(): void
    {
        Service::truncate();

        $services = [
            [
                'name' => 'Mi Hogar',
                'description' => 'Asegurá tu forma de vivir y tus pertenencias con una cobertura integral y personalizada para tu casa.
Hacelo fácil, rápido y online.',           
                'price' => 7717,
                'image' => '/hero-home-mi-hogar-desktop.jpg'
            ],

            [
                'name' => 'Mi Mascota',
                'description' => 'Sabemos que tu mascota es parte de tu familia, por eso tenemos la mejor cobertura para tu perro o gato.
Un seguro pensado para ellos y para tu tranquilidad.
Contratalo fácil, rápido y online.',         
                'price' => 6746,
                'image' => 'hero-home-mi-mascota-desktop.jpg'
            ],

            [
                'name' => 'Mi Tecnologia',
                'description' => 'Protegemos tus dispositivos que te permiten estar conectado y son esenciales en tu día a día.
Tranquilo, nosotros lo aseguramos.',               
                'price' => 10068,
                'image' => 'hero-home-mi-tecnologia-desktop.jpg'
            ],

            [
                'name' => 'Accidentes Personales',
                'description' => 'Aseguramos tu forma de vivir. Que los accidentes sean solamente una anécdota.',               
                'price' => 6322,
                'image' => 'hero-home-mis-accidentes-personales-desktop.jpg'
            ],

            [
                'name' => 'Mi Vida',
                'description' => 'Asegurate de disfrutar con quienes más amás, sabiendo que estás protegido por nosotros.
Contá con un respaldo económico para vos y tu familia ante las eventualidades de la vida.',
                'price' => 7999,
                'image' => '@/Images/hero-home-mi-vida-desktop.jpg'
            ],

        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
