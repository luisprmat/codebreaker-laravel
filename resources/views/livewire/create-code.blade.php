<div class="mt-8 flex flex-col items-center">
    <form action="">
        <textarea wire:model.live="message" cols="30" rows="10" class="bg-white/10 text-white px-3 py-2 rounded-xl"></textarea>
    </form>

    <div class="text-white text-center mt-8 flex gap-7">
        @foreach (explode(' ', $message) as $word)
            <div class="word">
                @foreach (str_split($word) as $character)
                    <span class="material-symbols-outlined character">{{ $this->letters[strtolower($character)] ?? $character }}</span>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
