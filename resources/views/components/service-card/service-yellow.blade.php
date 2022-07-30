@if ($theme == 'light')
    <div class="card-service md:max-w-[960px] mb-12 mx-4 md:mx-auto px-10 md:px-8 py-12 md:py-10 hover:shadow-main-menu hover:shadow-black-200/40 bg-white rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-1">
            <div class="card-service-body col-span-8 text-center md:text-left">
                <h2 class="font-heading font-black text-heading-h4 md:text-heading-h3 text-gray-title mb-9 md:mb-6">Diseño Web</h2>
                <p class="text-md text-gray-normal mb-9">
                    Investigación y diseño las interfaces de usuario (ui) para tu sitio o aplicación web. Wireframes, Mockups y prototipado.
                </p>
                <a href="#contact-banner" class="rounded-full bg-yellow-400 text-gray-title py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Diseña mi web >
                </a>
            </div>
            <div class="card-service-cover col-span-4 mt-12 md:mt-0">
                <img 
                    src="{{ asset('img/service-web-design.png') }}"
                    alt="Servicio-Web-Design"  
                    class="service-cover-img mx-auto md:mr-3"
                >
            </div>
        </div>
    </div>
@else
    <div class="card-service mb-8 py-12 px-10 mx-4 bg-gradient-to-r from-black-400 to-black-500 rounded-lg">
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="card-service-body text-center">
                <h2 class="font-heading text-heading-h4 font-black mb-9 text-white">Diseño Web</h2>
                <p class="text-md mb-9 text-white/75">
                    Investigación y diseño las interfaces de usuario (ui) para tu sitio o aplicación web. Wireframes, Mockups y prototipado.
                </p>
                <a href="#" class="rounded-full bg-yellow-300 text-black-500 py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Diseña mi web >
                </a>
            </div>
            <div class="card-service-cover mt-12">
                <img 
                    src="{{ asset('img/service-web-design.png') }}"
                    alt="Diter About Me"  
                    class="service-cover-img mx-auto"
                >
            </div>
        </div>
    </div>
@endif