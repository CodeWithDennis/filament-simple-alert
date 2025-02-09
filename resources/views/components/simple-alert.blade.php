@props([
    'actions' => null,
    'actionsVerticalAlignment' => 'center',
    'border' => false,
    'color' => null,
    'description' => null,
    'icon' => null,
    'iconVerticalAlignment' => 'center',
    'link' => null,
    'linkBlank' => false,
    'linkLabel' => null,
    'title' => null,
])

@php
    use function Filament\Support\get_color_css_variables;

    $colors = \Illuminate\Support\Arr::toCssStyles([
           get_color_css_variables($color, shades: [50, 100, 400, 500, 700, 800]),
   ]);
@endphp

<div x-data="{}"
     {{ $attributes->class([
         'filament-simple-alert rounded-md bg-custom-50 p-4 dark:bg-custom-400/10',
         'ring-1 ring-custom-100 dark:ring-custom-500/70' => $border,
     ]) }}
     style="{{ $colors }}">
    <div class="flex gap-3">
        @if($icon)
            <div @class([
                'flex-shrink-0',
                $iconVerticalAlignment === 'start' ? 'self-start' : 'self-center',
            ])>
                <x-filament::icon
                        :icon="$icon"
                        class="h-5 w-5 text-custom-400"
                />
            </div>
        @endif
        <div class="items-center flex-1 md:flex md:justify-between space-y-3 md:space-y-0 md:gap-3">
            @if($title || $description)
                <div class="space-y-0.5">
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
                <div @class([
                  'flex items-center gap-3',
                    $actionsVerticalAlignment === 'start' ? 'self-start' : 'self-center',
                ])>
                    <div class="flex items-center whitespace-nowrap gap-3">
                        @if($link)
                            <p class="text-sm md:mt-0 self-center">
                                <a href="{{ $link }}" {{ $linkBlank ? 'target="_blank"' : '' }} class="whitespace-nowrap font-medium text-custom-400 hover:text-custom-500">
                                    {{ $linkLabel }}
                                    <span aria-hidden="true"> &rarr;</span>
                                </a>
                            </p>
                        @endif
                        @if($actions)
                            <div class="gap-3 flex items-center justify-start">
                                @foreach ($actions as $action)
                                    @if ($action->isVisible())
                                        {{ $action }}
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
