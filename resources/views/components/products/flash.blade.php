<div class="flex flex-col justify-evenly my-8 h-dvh px-6 bg-[url('/images/exclusive.jpg')] bg-cover bg-no-repeate bg-center">
    <div class="flex flex-col gap-6">
        <div class="text-center">
            <h1 class="text-3xl text-white">Lorem ipsum.</h1>
        </div>
        <div class="text-center text-white">
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit sed consequatur impedit atque natus dignissimos.</p>
        </div>
    </div>
    <div class="flex justify-center">
        <x-btns.btn-info icon="bi bi-eye" link="/" label="Saiba Mais" />
    </div>

    <div class="border bg-black/45 flex justify-center p-4 rounded-md text-white w-full">
        <div class="bg-black/45 border p-4 rounded-md flex justify-center w-full" id="clockdiv">
            <div class="border-l">
                <h1 class="font-extrabold text-3xl p-4" id="days">150</h1>
                <span class="text-sm flex justify-center">Dias</span>
            </div>
            <div class="border-l">
                <h1 class="font-extrabold text-3xl p-4" id="hours">23</h1>
                <span class="text-sm flex justify-center">Horas</span>
            </div>
            <div class="border-l">
                <h1 class="font-extrabold text-3xl p-4" id="minutes">47</h1>
                <span class="text-sm flex justify-center">Mins</span>
            </div>
            <div class="border-l border-r">
                <h1 class="font-extrabold text-3xl p-4" id="seconds">59</h1>
                <span class="text-sm flex justify-center">Segs</span>
            </div>
        </div>
    </div>
</div>