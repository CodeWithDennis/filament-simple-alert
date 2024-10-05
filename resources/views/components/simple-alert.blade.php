@props([
    'actions' => null,
    'color' => null,
    'description' => null,
    'icon' => null,
    'link' => null,
    'linkBlank' => false,
    'linkLabel' => null,
    'title' => null,
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
                        class="h-5 w-5 text-custom-400"
                />
            </div>
        @endif
        <div class="ml-3 items-center flex-1 md:flex md:justify-between">
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
            @if($link || $actions)
                <div class="flex gap-x-3 items-center whitespace-nowrap">
                    @if($link)
                        <p class="text-sm md:ml-6 md:mt-0 self-center">
                            <a href="{{ $link }}" {{ $linkBlank ? 'target="_blank"' : '' }} class="whitespace-nowrap font-medium text-custom-400 hover:text-custom-500">
                                {{ $linkLabel }}
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </p>
                    @endif

                    @if($actions)
                        <div class="md:ml-6 gap-3 flex items-center justify-start">
                            @foreach ($actions as $action)
                                @if ($action->isVisible())
                                    {{ $action }}
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>