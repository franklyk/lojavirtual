<x-layout>

    <x-forms.form action="" class="w-10/12 my-6 mx-auto md:w-2/4">
        <x-forms.input type="search" :label="false" name="search" />
    </x-forms.form>

    <section>
        @foreach ($banners as $banner)
        <div
            class="bg-[url('/images/banners/{{ $banner->img_background }}')] bg-no-repeat bg-center bg-cover flex justify-center gap-6 flex-wrap md:flex-nowrap">
            <div class="flex flex-col items-center justify-center w-1/2 min-w-56 shrink-0 p-2">
                <div class="text-center text-gray-600 w-52 h-auto">
                    <h1 class="text-3xl">{{ $banner->title }}</h1>
                    <p class="py-3">
                        {{ $banner->description }}
                        
                    </p>
                    <div>
                        <x-btns.btn-success link="banners/{{$banner->id}}/edit">Pesquisar</x-btns.btn-success>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <x-images.image image="/images/banners/{{ $banner->img_banner }}" width="w-full" class="max-h-96"/>
            </div>
        </div>
        @endforeach
    </section>
    <main class="container mx-auto px-4">

        <x-mains.features />

    </main>

</x-layout>
