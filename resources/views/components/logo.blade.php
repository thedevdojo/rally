@props([
    'wordmark' => true,
    'size' => 'md',
])

@php
    // Square box that drives the icon's height; the icon scales to fit it,
    // matching the default project's logo layout.
    $box = [
        'sm' => 'size-5',
        'md' => 'size-7',
        'lg' => 'size-9',
    ][$size] ?? 'size-7';

    $text = [
        'sm' => 'text-sm',
        'md' => 'text-lg',
        'lg' => 'text-2xl',
    ][$size] ?? 'text-lg';
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5 select-none']) }}>
    <span class="flex {{ $box }} items-center justify-center">
        <x-logo-icon />
    </span>
    @if ($wordmark)
        <span class="font-bold tracking-tight text-fg {{ $text }}">{{ config('app.name') }}</span>
    @endif
</span>
