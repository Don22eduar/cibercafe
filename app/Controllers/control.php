<?php

namespace App\Controllers;

class Control extends BaseController
{
    public function hogar(): string
    {
        $data['productos'] = [
            [
                'id' => 1,
                'nombre' => 'Cortinas',
                'precio' => 15.00,
                'descripcion' => 'Cortinas de tela con forro térmico, controla la iluminacion y mejora el aislamiento de tu hogar',
                'imagen' => '1.webp'
            ],
            [
                'id' => 2,
                'nombre' => 'Cojines decorativos',
                'precio'      => 12.75,
                'descripcion' => 'Cojines de algodón con diseño moderno, ideales para sofás y camas',
                'imagen'      => '2.webp'
            ],
            [
                'id' => 3,
                'nombre' => 'Camas',
                'precio' => 320.00,
                'descripcion' => 'Disfruta de un descanso reparador con nuestras camas de alta calidad, diseñadas para brindar el máximo confort y soporte. Con una estructura robusta y un diseño elegante, nuestras camas se adaptan a cualquier estilo de dormitorio. Elige entre una variedad de tamaños y acabados para crear el espacio perfecto para relajarte y recargar energías cada noche.',
                'imagen' => '3.jpg'
            ],
        ];

        return view('hogar', $data);
    }

    public function electro(): string
    {
        $data['productos'] = [
            [
                'id'=> 4,
                'nombre' => 'Camara de seguridad',
                'precio' => 450.00,
                'descripcion' => 'Cámara de vigilancia con visión nocturna, ideal para monitorear tu hogar y proteger lo que más quieres',
                'imagen'=> '4.jpeg'
            ],
            [
                'id'=> 5,
                'nombre' => 'Camara para streaming',
                'precio'=> 379.00,
                'descripcion' => 'Cámara de video para transmisión en vivo, perfecta para creadores de contenido y streamers que buscan calidad profesional en sus transmisiones',
                'imagen' => '5.webp'
            ],
            [
                'id' => 6,
                'nombre'=> 'Consola de videojuegos',
                'precio' => 510.00,
                'descripcion' => 'Consola de última generación con controlador, ofrece una experiencia de juego inmersiva con gráficos impresionantes y un rendimiento excepcional',
                'imagen' => '6.webp'
            ],
        ];

        return view('electro', $data);
    }

    public function limpieza(): string
    {
        $data['productos'] = [
            [
                'id'=> 7,
                'nombre' => 'Cloro',
                'precio' => 5.99,
                'descripcion' => 'Cloro para limpieza del hogar, ideal para desinfectar y eliminar gérmenes en superficies, baños y cocinas, manteniendo tu hogar seguro y saludable',
                'imagen' => '7.jpg'
            ],
            [
                'id' => 8,
                'nombre'=> 'Cepillo para baño',
                'precio'=> 8.00,
                'descripcion' => 'Cepillo para limpieza de baños, con cerdas resistentes y diseño ergonómico, facilita la eliminación de suciedad y manchas difíciles en inodoros, lavabos y azulejos, manteniendo tu baño impecable',
                'imagen'=> '8.jpg'
            ],
            [
                'id'=> 9,
                'nombre'=> 'Cera para pisos',
                'precio'=> 35.00,
                'descripcion' => 'Cera para pulir y mantener pisos, proporciona un brillo duradero y protección contra el desgaste, ideal para pisos de madera, laminados y baldosas, manteniendo tus suelos como nuevos por más tiempo',
                'imagen'=> '9.jpg'
            ],
        ];

        return view('limpieza', $data);
    }


    public function catalogo(): string
    {
        return view('catalogo');
    }



    public function acercade(): string
    {
        return view('acercade');
    }
}
