<div class="flex justify-center mt-8">
    <form action="">
        <textarea wire:model.live="message" cols="30" rows="10" class="bg-white/10 text-white px-3 py-2 rounded-xl"></textarea>
    </form>

    <p>
        {{ $message }}
    </p>
</div>
