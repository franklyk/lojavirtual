<section>
    <div 
        class="bg-[url('/images/banners/{{ $banner->img_background }}')] bg-no-repeat bg-center bg-cover flex justify-center gap-6 flex-wrap md:flex-nowrap">
        <div class="flex flex-col items-center justify-center w-1/2 min-w-56 shrink-0 p-2">
            <div class="text-center text-gray-600 w-52 h-auto">
                <h1 class="text-3xl">Nike New Colection</h1>
                <p class="py-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore neque dolorum odit
                    voluptate
                    officiis ipsa.
                </p>
                <div>
                    <x-btns.btn-success link="#">Pesquisar</x-btns.btn-success>
                </div>
            </div>
        </div>
        <div class="p-6">
            <x-images.image image="/images/banners/banner_img.png" width="w-full" />
        </div>
    </div>

</section>
