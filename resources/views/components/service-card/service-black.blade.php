@if ($theme == 'light')
    <div class="card-service mb-12 py-12 px-10 mx-4 bg-white rounded-lg">
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="card-service-body text-center">
                <h2 class="font-heading font-black text-heading-h4 text-gray-title mb-9">Aplicaciones Web</h2>
                <p class="text-md mb-9 text-gray-normal">
                    Si quieres desarrollar una aplicación o sistema para tu negocio. Escalable y personalizado, hecho a la medida.
                </p>
                <a href="#" class="rounded-full bg-black-400 text-white py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Desarrolla mi app web >
                </a>
            </div>
            <div class="card-service-cover mt-12">
                <img 
                    src="{{ asset('img/service-web-applications.png') }}"
                    alt="Diter About Me"  
                    class="service-cover-img mx-auto"
                >
            </div>
        </div>
    </div>
@else
    <div class="card-service mb-12 py-12 px-10 mx-4 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-lg">
        <div class="grid grid-cols-1 grid-rows-1">
            <div class="card-service-body text-center">
                <h2 class="font-heading text-heading-h4 font-black mb-9 text-black-500">Aplicaciones Web</h2>
                <p class="text-md mb-9 text-gray-normal">
                    Si quieres desarrollar una aplicación o sistema para tu negocio. Escalable y personalizado, hecho a la medida.
                </p>
                <a href="#" class="rounded-full bg-yellow-200 text-black-500 py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Desarrolla mi app web >
                </a>
            </div>
            <div class="card-service-cover mt-12">
                <img 
                    src="{{ asset('img/service-web-applications.png') }}"
                    alt="Diter About Me"  
                    class="service-cover-img mx-auto"
                >
            </div>
        </div>
    </div>
@endif