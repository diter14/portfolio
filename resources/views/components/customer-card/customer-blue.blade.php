@if ($theme == 'light')
<div class="card-customer md:max-w-6xl bg-white rounded-lg relative md:overflow-hidden mb-12 mx-4 md:mx-auto py-10 md:py-8 px-4 md:px-8 hover:shadow-main-menu hover:shadow-black-200/40">
    <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-1">
        <div class="card-customer-body md:col-span-7 text-center md:text-left">
            <h2 class="font-heading text-heading-h4 font-black text-gray-title mb-9 md:mb-4">
                {{ $customer['name'] }}
            </h2>
            <p class="text-md text-gray-normal mb-8 md:mb-4">
                {{ $customer['description'] }}
            </p>
            <div class="card-badges md:mb-8">
                @foreach ($customer['badges'] as $badge)
                    <span class="badge text-xs text-blue-800 bg-blue-100 rounded-full py-[2px] px-2 mr-2">
                        {{ $badge }}
                    </span>
                @endforeach
            </div>
            <div class="card-buttons absolute md:static bottom-8 left-0 w-full">
                <a href="{{ $customer['link_process'] }}" target="_blank" class="bg-blue-500 text-white font-heading font-bold rounded-full mx-auto mr-2 md:mr-4 py-2 md:py-1 px-4">
                    Ver presentación >
                </a>
                <a href="{{ $customer['link_web'] }}" class="font-heading text-blue-800 bg-blue-100 rounded-full mx-auto py-2 md:py-1 px-4">
                    Visitar Sitio
                </a>
            </div>
        </div>
        <div class="card-customer-cover md:relative md:col-span-5 my-12 md:my-8">
            <img 
                src="{{ asset($customer['cover']) }}"
                alt="{{ $customer['name'] }}"
                class="customer-cover-img md:absolute md:-top-[54px] transition-all duration-300 md:right-0 md:w-[400px] mx-auto"
            >
        </div>
    </div>
</div>
@else
<div class="card-customer md:max-w-5xl bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg relative mb-12 mx-4 md:mx-auto py-10 md:py-8 px-4 md:px-8">
    <div class="grid grid-cols-1 md:grid-cols-12 grid-rows-1">
        <div class="card-customer-body md:col-span-7 text-center md:text-left">
            <h2 class="font-heading text-heading-h4 font-black text-white mb-9 md:mb-6">
                {{ $customer['name'] }}
            </h2>
            <p class="text-md text-white/75 mb-8 md:mb-6">
                {{ $customer['description'] }}
            </p>
            <div class="card-badges md:mb-8">
                @foreach ($customer['badges'] as $badge)
                    <span class="badge text-xs text-blue-800 bg-blue-100 rounded-full py-[2px] px-2 mr-2">
                        {{ $badge }}
                    </span>
                @endforeach
            </div>
            <div class="card-buttons absolute md:static bottom-8 left-0 w-full">
                <a href="{{ $customer['link_web'] }}" class="bg-yellow-400 text-black-500 font-heading font-bold rounded-full mx-auto mr-2 py-2 md:py-1 px-4">
                    Visitar Sitio >
                </a>
                <a href="#" class="font-heading text-blue-100 bg-transparent rounded-full border border-blue-300 mx-auto py-2 md:py-1 px-4">
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
@endif