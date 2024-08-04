@props([
    'message',
    'letters',
])

<div class="text-white text-center flex gap-7">
    @foreach (explode(' ', $message) as $word)
        <div class="word">
            @foreach (str_split($word) as $character)
                <span class="material-symbols-outlined character">{{ $letters[strtolower($character)] ?? $character }}</span>
            @endforeach
        </div>
    @endforeach
</div>
