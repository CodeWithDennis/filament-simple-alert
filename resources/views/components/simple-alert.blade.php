@php
    use function Filament\Support\get_color_css_variables;

    $colors = \Illuminate\Support\Arr::toCssStyles([
           get_color_css_variables($getColor(), shades: [50, 100, 400, 500, 700, 800]),
    ]);

    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
        'h-5 w-5 text-custom-400',
        $getIconAnimation(),
    ]);

    $actions = $getActions();
    $description = $getDescription();
    $icon = $getIcon();
    $title = $getTitle();
@endphp

<div x-data="{}"
     {{ $attributes->class([
         'filament-simple-alert rounded-md bg-custom-50 p-4 dark:bg-custom-400/10',
         'ring-1 ring-custom-100 dark:ring-custom-500/70' => $getBorder(),
     ]) }}
     style="{{ $colors }}">
    <div class="flex gap-3">
        @if($icon)
            <div @class([
                'flex-shrink-0',
                $getIconVerticalAlignment() === 'start' ? 'self-start' : 'self-center',
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
                    $getActionsVerticalAlignment() === 'start' ? 'self-start' : 'self-center',
                ])>
                    <div class="flex items-center whitespace-nowrap gap-3">
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
