@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="bg-red-400 text-white p-2  text-center   font-bold uppercase border-l-8 border-red-700">{{ $message }}</li>
        @endforeach
    </ul>
@endif
