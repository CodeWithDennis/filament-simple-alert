@php
    use Filament\Support\Facades\FilamentAsset;use function Filament\Support\get_color_css_variables;

    $colors = \Illuminate\Support\Arr::toCssStyles([
           get_color_css_variables($getType(), shades: [50, 400, 500, 600, 700, 800]),
   ]);
@endphp

<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div class="filament-simple-alert rounded-md bg-custom-50 p-4 dark:bg-gray-900 dark:ring-white/10" style="{{ $colors }}">
        <div class="flex">
            @if($getIcon())
                <div class="flex-shrink-0 self-center">
                    <x-filament::icon
                            icon="{{ $getIcon() }}"
                            class="h-5 w-5 h-5 w-5 text-custom-400"
                    />
                </div>
            @endif
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <div>
                    <p class="text-sm font-medium text-custom-800 dark:text-white">
                        {!! $getTitle() !!}
                    </p>
                    <p class="text-sm text-custom-700 dark:text-white">
                        {!! $getDescription() !!}
                    </p>
                </div>
                @if($getLink())
                    <p class="mt-3 text-sm md:ml-6 md:mt-0 self-center">
                        <a href="{{ $getLink() }}" {{ $getBlank() ? 'target="_blank"' : '' }} class="whitespace-nowrap font-medium text-custom-400 hover:text-custom-500">
                            {{ $getLinkLabel() }}
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </div>
</x-dynamic-component>