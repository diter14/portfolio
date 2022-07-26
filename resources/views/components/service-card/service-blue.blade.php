@if ($theme == 'light')
    <div class="card-service md:max-w-[960px] mb-12 py-12 px-10 md:py-10 md:px-8 mx-4 md:mx-auto bg-white rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-1">
            <div class="card-service-body col-span-8 text-center md:text-left">
                <h2 class="font-heading font-black text-heading-h4 md:text-heading-h3 text-gray-title mb-9">Desarrollo Web</h2>
                <p class="text-md text-gray-normal mb-9">
                    Construyo tu sitio web, e-Commerce, landing page y portafolios a medida con el toque único que mereces.
                </p>
                <a href="#" class="rounded-full bg-blue-400 text-white py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Construye mi web >
                </a>
            </div>
            <div class="card-service-cover col-span-4 mt-12 md:mt-0">
                <img 
                    src="{{ asset('img/service-web-development.png') }}"
                    alt="Servicio-Web-Development"  
                    class="service-cover-img mx-auto md:mr-3"
                >
            </div>
        </div>
    </div>
@else
    <div class="card-service mb-12 py-12 px-10 mx-4 bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg">
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="card-service-body text-center">
                <h2 class="font-heading text-heading-h4 font-black mb-9 text-white">Desarrollo Web</h2>
                <p class="text-md mb-9 text-white/75">
                    Construyo tu sitio web, e-Commerce, landing page y portafolios a medida con el toque único que mereces.
                </p>
                <a href="#" class="rounded-full bg-yellow-500 text-black-500 py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Construye mi web >
                </a>
            </div>
            <div class="card-service-cover mt-12">
                <img 
                    src="{{ asset('img/service-web-development.png') }}"
                    alt="Diter About Me"  
                    class="service-cover-img mx-auto"
                >
            </div>
        </div>
    </div>
@endif