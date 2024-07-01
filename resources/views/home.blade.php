<x-layout>


    <x-forms.form action="" class="w-10/12 my-6 mx-auto md:w-2/4">
        <x-forms.input type="search" :label="false" name="search" />
    </x-forms.form>

    <section class="bg-[url('/images/banners/banner_bg.jpg')] bg-no-repeat bg-center bg-cover w-full">
        @foreach ($banners as $banner)
            {{-- {{ dd($banners) }} --}}


            <x-banners.launch title="{{ $banner['title'] }}" description="{{ $banner['description'] }}" image="{{$banner['id'] . '/' . $banner['img_banner'] }}" />
        @endforeach
    </section>

    <main class="container mx-auto px-4">

        <x-mains.features />

        <x-banners.week image="/images/banners/banner_bf1.png" />

        <div class="grid justify-evenly grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

            @for ($i = 0; $i < 10; $i++)
                <x-products.week />
            @endfor

        </div>

        <x-banners.week image="/images/banners/banner_medium.png" />

        <x-products.overstock />

        <div class="md:flex items-center justify-evenly gap-6">
            <x-products.flash />
            <x-products.slide />
        </div>

    </main>

</x-layout>
