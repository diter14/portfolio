<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function landing(Request $request)
    {
        $meta = [
            'title' => 'Diter Terrones',
            'description' => 'Diseñador Web y Frontend Developer. 🔥 Apasionado por la tecnología, el diseño y desarrollo web.',
            'url' => 'https://diterterrones.com/',
            'cover' => '/img/diter-terrones-cover-open-graph.png',
            'favicon' => '/img/diter-terrones-favicon-32.png',
            'theme_color' => '#5171fb'
        ];
        $skills = [
            'tech' => [
                [
                    'logo' => 'img/skills-figma.png',
                    'label' => 'Figma'
                ],
                [
                    'logo' => 'img/skills-adobexd.png',
                    'label' => 'Adobe Xd'
                ],
                [
                    'logo' => 'img/skills-laravel.png',
                    'label' => 'Laravel'
                ],
                [
                    'logo' => 'img/skills-php.png',
                    'label' => 'PHP'
                ],
                [
                    'logo' => 'img/skills-wordpress.png',
                    'label' => 'Wordpress'
                ],
                [
                    'logo' => 'img/skills-html.png',
                    'label' => 'HTML'
                ],
                [
                    'logo' => 'img/skills-css.png',
                    'label' => 'CSS'
                ],
                [
                    'logo' => 'img/skills-javascript.png',
                    'label' => 'JavaScript'
                ],
                [
                    'logo' => 'img/skills-vuejs.png',
                    'label' => 'Vue.js'
                ],
                [
                    'logo' => 'img/skills-git.png',
                    'label' => 'Git'
                ],
            ],
            'soft' => [
                [
                    'logo' => 'img/skills-vibes.png',
                    'label' => 'GoodVibes'
                ],
                [
                    'logo' => 'img/skills-disciplined.png',
                    'label' => 'Disciplinado'
                ],
                [
                    'logo' => 'img/skills-coworker.png',
                    'label' => 'Empático'
                ],
                [
                    'logo' => 'img/skills-focus.png',
                    'label' => 'Enfocado'
                ],
                [
                    'logo' => 'img/skills-creative.png',
                    'label' => 'Creativo'
                ],
                [
                    'logo' => 'img/skills-openmind.png',
                    'label' => 'Open Mind'
                ],
                [
                    'logo' => 'img/skills-listener.png',
                    'label' => 'Escuchador'
                ],
                [
                    'logo' => 'img/skills-communicator.png',
                    'label' => 'Comunicador'
                ],
            ]
        ];
        $customers = [
            [
                'name' => 'ExpresArte Mejor',
                'description' => 'Diseño y construcción de plataforma web orientado a cursos de oratoria, locución, blog y eventos.',
                'badges' => ['Wordpress', 'Elementor', 'Diseño Web'],
                'link_web' => 'https://expresartemejor.com',
                'link_process' => 'https://www.facebook.com/diter.terrones/posts/272220434488887',
                'cover' => 'img/customers-expresartemejor.png',
                'theme-color' => 'black',
            ],
            [
                'name' => 'Aremisse Lima',
                'description' => 'Sitio web corporativo para empresa de transporte de personal, turístico y corporativo.',
                'badges' => ['Laravel', 'Vue JS', 'Diseño UI'],
                'link_web' => 'https://aremisselima.com',
                'link_process' => 'https://www.facebook.com/diter.terrones/posts/239367091107555',
                'cover' => 'img/customers-aremisse.png',
                'theme-color' => 'yellow',
            ],
            [
                'name' => 'INGYMEC',
                'description' => 'Análisis, diseño de arquitectura web y construcción de sitio web corporativo del rubro metal mecánica.',
                'badges' => ['Wordpress', 'Divi', 'Diseño Web'],
                'link_web' => 'https://ingymec.com',
                'link_process' => 'https://www.facebook.com/diter.terrones/posts/457294005981528',
                'cover' => 'img/customers-ingymec.png',
                'theme-color' => 'blue',
            ],
            [
                'name' => 'InterConnecta',
                'description' => 'Construcción de plataforma web personalizada para visualizar métricas y perfiles de empleados.',
                'badges' => ['Laravel', 'Vue JS', 'Diseño UI'],
                'link_web' => '#',
                'link_process' => 'https://www.figma.com/proto/Bok2k2Y1RPn5oP1Guva0YP/InterConnecta-Employee-Profile?page-id=1%3A6&node-id=198%3A7339&viewport=-109%2C-4071%2C0.41&scaling=min-zoom&starting-point-node-id=198%3A7339&show-proto-sidebar=1',
                'cover' => 'img/customers-interconnecta.png',
                'theme-color' => 'black',
            ],
            [
                'name' => 'El Rico Store',
                'description' => 'Construcción y diseño de e-Commerce para empresa de venta de ropa de sector geek 🔥.',
                'badges' => ['eCommerce', 'Diseño Web', 'Wordpress'],
                'link_web' => 'https://elricostore.com',
                'link_process' => 'https://www.figma.com/proto/JP4qrPd6zzquKtGrTfDpYh/El-Rico-Store?page-id=60%3A2&node-id=604%3A297&viewport=-3116%2C391%2C0.27&scaling=min-zoom&starting-point-node-id=604%3A297&show-proto-sidebar=1',
                'cover' => 'img/customers-elricostore.png',
                'theme-color' => 'blue',
            ],
            [
                'name' => 'AK Tech. Solutions',
                'description' => 'Diseño y construcción de sitio web corporativo de sector de minero e implementación de telemandos.',
                'badges' => ['Wordpress', 'Elementor', 'Diseño Web'],
                'link_web' => 'https://aktechnicalsolutions.com',
                'link_process' => 'https://www.facebook.com/diter.terrones/posts/433242521720010',
                'cover' => 'img/customers-aktechnical.png',
                'theme-color' => 'yellow',
            ],
            [
                'name' => 'Corporación Marles',
                'description' => 'Arquitectura web, diseño y construcción de catálogo virtual para mayoreo de productos de panadería.',
                'badges' => ['Arquitectura', 'Diseño Web', 'Wordpress'],
                'link_web' => 'https://corporacionmarles.com',
                'link_process' => 'https://www.figma.com/proto/hl2QgyTZQbA10hszQBQpDt/e-Commerce?page-id=411%3A2&node-id=536%3A5&viewport=-1589%2C-46%2C0.19&scaling=min-zoom&starting-point-node-id=536%3A5&show-proto-sidebar=1',
                'cover' => 'img/customers-corpmarles.png',
                'theme-color' => 'black',
            ],
        ];
        $rrss = [
            [
                'link' => 'https://www.linkedin.com/in/diter-terrones/',
                'logo' => 'img/rrss-logo-linkedin.png',
                'label_alt' => 'Logo LinkedIn',
                'label' => '/in/diter-terrones'
            ],
            [
                'link' => 'https://facebook.com/diter.terrones',
                'logo' => 'img/rrss-logo-facebook.png',
                'label_alt' => 'Logo Facebook',
                'label' => '/diter.terrones'
            ],
            [
                'link' => 'https://twitter.com/diter_terrones',
                'logo' => 'img/rrss-logo-twitter.png',
                'label_alt' => 'Logo Twitter',
                'label' => '/@diter_terrones'
            ],
            [
                'link' => 'https://instagram.com/diter.terrones/',
                'logo' => 'img/rrss-logo-instagram.png',
                'label_alt' => 'Logo Instagram',
                'label' => '/@diter.terrones'
            ],
        ];
        $testimonials = [
            [
                'quote' => 'Estamos realmente contentos de contar con los servicios profesionales de Diter. Desde la funcionalidad, el asesoramiento y las soluciones precisas en el tiempo, los servicios prestados por Diter son excelentes y el trato es muy cercano.',
                'owner_photo' => 'img/testimonial-expresartemejor.png',
                'owner_name' => 'Jesús Morales',
                'owner_title' => 'CEO de ExpresArte Mejor',
            ],
            [
                'quote' => 'Todo el proceso de creación de la web fue super rapido y  de manera eficaz. Te ayudan y asesoran en todo el proceso y posterior a la entrega de la web. Realmente recomendables 100% y super confiables.',
                'owner_photo' => 'img/testimonial-elricostore.png',
                'owner_name' => 'Sarita Pariño',
                'owner_title' => 'CEO de El Rico Store',
            ],
            [
                'quote' => 'Gracias por la rapidez y eficiencia en la creación de nuestra página web https://aremisse.com/, la cual ha quedado lista antes de tiempo y mucho mejor de lo que nos esperábamos!!',
                'owner_photo' => 'img/testimonial-aremisse.png',
                'owner_name' => 'Solange Del Río',
                'owner_title' => 'CEO de Aremisse Lima',
            ],
            [
                'quote' => 'Super recomendado, cumplió la expectativa de A & K Technical Solution\'s SAC, aportó ideas adicionales que lograron dar a conocer a los clientes los productos y servicios que  brindamos, contento con los resultados obtenidos.',
                'owner_photo' => 'img/testimonial-aktechnical.png',
                'owner_name' => 'Arturo Ramirez',
                'owner_title' => 'Gerente de AK Tech. Solutions',
            ],
        ];

        return view('home', [
            'meta' => $meta ,
            'rrss' => $rrss ,
            'skills' => $skills ,
            'customers' => $customers ,
            'testimonials' => $testimonials ,
        ]);
    }
}
