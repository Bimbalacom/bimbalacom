<div class="rounded-lg py-10 px-4 flex flex-col items-center justify-center shadow-lg border border-gray-100">
    <img class="w-16 h-auto" src="{{ asset($image) }}" alt="{{ $title }}" width="64px" height="64px" loading="lazy">
    <p class="font-bold mt-4">{{ $title }}</p>
    <p class="mt-2 text-sm">{{ $category }}</p>
    <p class="mt-4 text-sm">{{ $description }}</p>
</div>
