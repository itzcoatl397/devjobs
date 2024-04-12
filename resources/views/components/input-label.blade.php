@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-500 uppercase font-bold dark:text-gray-300 mb-2 ']) }}>
    {{ $value ?? $slot }}
</label>
