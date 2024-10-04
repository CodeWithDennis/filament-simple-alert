@props([
   'icon' => null,
   'color' => null,
   'title' => null,
   'description' => null,
   'link' => null,
   'linkLabel' => null,
   'linkBlank' => false,
])

@php
    use function Filament\Support\get_color_css_variables;

    $colors = \Illuminate\Support\Arr::toCssStyles([
           get_color_css_variables($color, shades: [50, 400, 500, 600, 700, 800]),
   ]);
@endphp

<div
        x-data="{}"
        class="filament-simple-alert rounded-md bg-custom-50 p-4 dark:bg-gray-900 dark:ring-white/10"
        style="{{ $colors }}">
    <div class="flex">
        @if($icon)
            <div class="flex-shrink-0 self-center">
                <x-filament::icon
                        icon="{{ $icon }}"
                        class="h-5 w-5 h-5 w-5 text-custom-400"
                />
            </div>
        @endif
        <div class="ml-3 flex-1 md:flex md:justify-between">
            @if($title || $description)
                <div>
                    @if($title)
                        <p class="text-sm font-medium text-custom-800 dark:text-white">
                            {{ $title }}
                        </p>
                    @endif
                    @if($description)
                        <p class="text-sm text-custom-700 dark:text-white">
                            {{ $description }}
                        </p>
                    @endif
                </div>
            @endif
            @if($link)
                <p class="mt-3 text-sm md:ml-6 md:mt-0 self-center">
                    <a href="{{ $link }}" {{ $linkBlank ? 'target="_blank"' : '' }} class="whitespace-nowrap font-medium text-custom-400 hover:text-custom-500">
                        {{ $linkLabel }}
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>