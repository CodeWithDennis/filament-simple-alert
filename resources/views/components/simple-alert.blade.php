@props([
    'color' => 'gray',
    'border' => false,
    'icon' => null,
    'iconAnimation' => null,
    'iconVerticalAlignment' => 'center',
    'title' => null,
    'description' => null,
    'actions' => null,
    'actionsVerticalAlignment' => 'center',
])

@php
    use function Filament\Support\get_color_css_variables;

    $color = value($getColor ?? $color);
    $border = value($getBorder ?? $border);
    $icon = value($getIcon ?? $icon);
    $iconAnimation = value($getIconAnimation ?? $iconAnimation);
    $iconVerticalAlignment = value($getIconVerticalAlignment ?? $iconVerticalAlignment);
    $title = value($getTitle ?? $title);
    $description = value($getDescription ?? $description);
    $actions = value($getActions ?? $actions);
    $actionsVerticalAlignment = value($getActionsVerticalAlignment ?? $actionsVerticalAlignment);

    $colors = \Illuminate\Support\Arr::toCssStyles([
           get_color_css_variables($color, shades: [50, 100, 400, 500, 700, 800]),
    ]);

    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
        'h-5 w-5 text-custom-400',
        $iconAnimation,
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
                        :class="$iconClasses"
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
                        <div class="block text-sm text-custom-700 dark:text-white">
                            {{ $description }}
                        </div>
                    @endif
                </div>
            @endif
            @if($actions)
                <div @class([
                  'flex items-center gap-3',
                    $actionsVerticalAlignment === 'start' ? 'self-start' : 'self-center',
                ])>
                    <div class="flex items-center whitespace-nowrap gap-3">
                        <div class="gap-3 flex items-center justify-start">
                            @foreach ($actions as $action)
                                @if ($action->isVisible())
                                    {{ $action }}
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>