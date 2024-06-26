<x-app-layout>
    <x-slot name="hero">

        <div class="w-full h-[200px] z-10 flex justify-center items-center relative">
            <div
                className="absolute -z-[1] inset-0 bottom-auto h-[400px] bg-white  bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)]  bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]">
            </div>

            <h1 class="font-black text-2xl md:text-5xl z-10 text-gray-800 leading-tight">
                {{ __('Mapa del sitio') }}
            </h1>
        </div>
    </x-slot>

    <div class="py-12 relative z-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="w-full grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

                @foreach ($navigationMap as $key => $navigation)
                <div class="flex flex-col gap-y-5">
                    <h2 class="text-xl font-bold">{{ $key }}</h2>
                    @foreach ($navigation as $link)
                    <Link href="{{ $link['link'] }}"
                        class="border rounded-md px-4 py-2 bg-white shadow-md shadow-primary-200 hover:shadow-xl hover:shadow-primary-300 flex flex-col gap-y-2">
                    <span class="text-lg font-bold">{{ $link['name']}}</span>

                    <p class="text-sm">{{ $link['des'] }}</p>
                    </Link>
                    @endforeach
                </div>
                @endforeach
            </div>

        </div>



    </div>
</x-app-layout>