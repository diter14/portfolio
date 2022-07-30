@if ($theme == 'light')
    <div class="card-service md:max-w-[960px] mb-12 mx-4 md:mx-auto px-10 md:px-8 py-12 md:py-10 hover:shadow-main-menu hover:shadow-black-200/40 bg-white rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-1">
            <div class="card-service-body col-span-8 text-center md:text-left">
                <h2 class="font-heading font-black text-heading-h4 md:text-heading-h3 text-gray-title mb-9 md:mb-6">Aplicaciones Web</h2>
                <p class="text-md mb-9 text-gray-normal">
                    Si quieres desarrollar una aplicación o sistema para tu negocio que sea escalable y personalizado, hecho a la medida, ¡Construyamos tu aplicación web!
                </p>
                <a href="#contact-banner" class="rounded-full bg-black-400 text-white py-2 px-4 font-heading font-bold w-fit mx-auto mb-9">
                    Desarrolla mi app web >
                </a>
            </div>
            <div class="card-service-cover col-span-4 mt-12 md:mt-0">
                <img 
                    loading="lazy"
                    width="200"
                    src="{{ asset('img/service-web-applications.png') }}"
                    alt="Servicio-Web-Applications"
                    class="service-cover-img mx-auto md:mr-3"
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