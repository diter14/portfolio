
<div class="card-customer bg-gradient-to-r from-blue-400 to-blue-600 rounded-lg relative mb-12 mx-4 py-10 px-4">
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
                    <span class="badge text-sm text-blue-800 bg-blue-100 rounded-full py-[2px] px-2 mr-2">
                        {{ $badge }}
                    </span>
                @endforeach
            </div>
            <div class="card-buttons absolute bottom-8 left-0 w-full">
                <a href="{{ $customer['link_web'] }}" class="bg-yellow-400 text-black-500 font-heading font-bold rounded-full mx-auto mr-2 py-2 px-4">
                    Visitar Sitio >
                </a>
                <a href="#" class="font-heading text-blue-100 bg-transparent rounded-full border border-blue-300 mx-auto py-2 px-4">
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
</div>