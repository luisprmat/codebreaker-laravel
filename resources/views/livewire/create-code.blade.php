<div class="my-8 flex flex-col items-center gap-10 flex-1">
    <form class="print:hidden">
        <textarea wire:model.live="message" cols="30" rows="10" class="bg-white/10 px-3 py-2 rounded-xl"></textarea>

        <div class="mt-2 flex justify-end">
            <button onClick="window.print()" class="bg-blue-500 px-2 py-1 rounded-md">Imprimir</button>
        </div>
    </form>

    <x-code :message="$message" :letters="$this->letters" />

    <x-legend :letters="$this->letters" />
</div>
