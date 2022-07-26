<div class="card-customer md:max-w-5xl bg-gradient-to-r from-black-400 to-black-700 rounded-lg relative mb-12 mx-4 md:mx-auto py-10 md:py-8 px-4 md:px-8">
    <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-1">
        <div class="card-customer-body md:col-span-7 text-center md:text-left">
            <h2 class="font-heading text-heading-h4 md:text-heading-h3 font-black text-white mb-9 md:mb-6">
                {{ $customer['name'] }}
            </h2>
            <p class="text-md text-white/75 mb-8 md:mb-6">
                {{ $customer['description'] }}
            </p>
            <div class="card-badges md:mb-8">
                @foreach ($customer['badges'] as $badge)
                    <span class="badge text-sm text-black-400 bg-yellow-100 rounded-full py-[2px] px-2 mr-2">
                        {{ $badge }}
                    </span>
                @endforeach
            </div>
            <div class="card-buttons absolute md:static bottom-8 left-0 w-full">
                <a href="{{ $customer['link_web'] }}" class="bg-yellow-300 text-black-500 font-heading font-bold rounded-full mx-auto mr-2 py-2 md:py-1 px-4">
                    Visitar Sitio >
                </a>
                <a href="#" class="font-heading text-black-100 bg-transparent rounded-full border border-black-100 mx-auto py-2 md:py-1 px-4">
                    Ver proceso
                </a>
            </div>
        </div>
        <div class="card-customer-cover md:relative md:col-span-5 my-12 md:my-8">
            <img 
                src="{{ asset($customer['cover']) }}"
                alt="{{ $customer['name'] }}"  
                class="customer-cover-img md:absolute md:-top-[48px] md:right-0 md:w-full mx-auto"
            >
        </div>
    </div>
</div>

{{-- <div class="card-customer bg-gradient-to-r from-black-400 to-black-700 rounded-lg relative mb-12 mx-4 py-10 px-4">
    <div class="grid grid-cols-1 grid-rows-1">
        <div class="card-customer-body text-center">
            <h2 class="font-heading text-heading-h4 font-black text-white mb-9">
                {{ $customer['name'] }}
            </h2>
            <p class="text-md text-white/75 mb-8">
                {{ $customer['description'] }}
            </p>
            <div class="card-badges">
                @foreach ($customer['badges'] as $badge)
                    <span class="badge text-sm text-black-400 bg-yellow-100 rounded-full py-[2px] px-2 mr-2">
                        {{ $badge }}
                    </span>
                @endforeach
            </div>
            <div class="card-buttons absolute bottom-8 left-0 w-full">
                <a href="{{ $customer['link_web'] }}" class="bg-yellow-300 text-black-500 font-heading font-bold rounded-full mx-auto mr-2 py-2 px-4">
                    Visitar Sitio >
                </a>
                <a href="#" class="font-heading text-black-100 bg-transparent rounded-full border border-black-100 mx-auto py-2 px-4">
                    Ver proceso
                </a>
            </div>
        </div>
        <div class="card-customer-cover mt-12 mb-12">
            <img 
                src="{{ asset($customer['cover']) }}"
                alt="{{ $customer['name'] }}"  
                class="customer-cover-img mx-auto"
            >
        </div>
    </div>
</div> --}}