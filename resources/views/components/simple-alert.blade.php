@props([
    'actions' => null,
    'actionsVerticalAlignment' => 'center',
    'border' => false,
    'color' => null,
    'description' => null,
    'icon' => null,
    'iconVerticalAlignment' => 'center',
    'iconAnimation' => null,
    'title' => null,
])

@php
    use function Filament\Support\get_color_css_variables;

    $colors = \Illuminate\Support\Arr::toCssStyles([
           get_color_css_variables($getColor(), shades: [50, 100, 400, 500, 700, 800]),
    ]);

    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
        'h-5 w-5 text-custom-400',
        $getIconAnimation(),
    ]);
@endphp

<div x-data="{}"
     {{ $attributes->class([
         'filament-simple-alert rounded-md bg-custom-50 p-4 dark:bg-custom-400/10',
         'ring-1 ring-custom-100 dark:ring-custom-500/70' => $getBorder(),
     ]) }}
     style="{{ $colors }}">
    <div class="flex gap-3">
        @if($getIcon())
            <div @class([
                'flex-shrink-0',
                $getIconVerticalAlignment() === 'start' ? 'self-start' : 'self-center',
            ])>
                <x-filament::icon
                    :icon="$getIcon()"
                    :class="$iconClasses"
                />
            </div>
        @endif
        <div class="items-center flex-1 md:flex md:justify-between space-y-3 md:space-y-0 md:gap-3">
            @if($getTitle() || $getDescription())
                <div class="space-y-0.5">
                    @if($getTitle())
                        <p class="text-sm font-medium text-custom-800 dark:text-white">
                            {{ $getTitle() }}
                        </p>
                    @endif
                    @if($getDescription())
                        <p class="text-sm text-custom-700 dark:text-white">
                            {{ $getDescription() }}
                        </p>
                    @endif
                </div>
            @endif
            @if($getActions())
                <div @class([
                  'flex items-center gap-3',
                    $getActionsVerticalAlignment() === 'start' ? 'self-start' : 'self-center',
                ])>
                    <div class="flex items-center whitespace-nowrap gap-3">
                        @if($getActions())
                            <div class="gap-3 flex items-center justify-start">
                                @foreach ($getActions() as $action)
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
