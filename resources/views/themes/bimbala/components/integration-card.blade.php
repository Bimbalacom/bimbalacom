<div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
    <img class="w-16 h-auto" src="{{ asset($image) }}" loading="lazy" alt="{{ $title }}" width="64px" height="64px">
    <p class="font-bold mt-4">{{ $title }}</p>
    <p class="mt-2 text-sm text-gray-600">{{ $description }}</p>
</div>
