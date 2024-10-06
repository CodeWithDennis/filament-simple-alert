<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <x-filament-simple-alert::simple-alert
            :icon="$getIcon()"
            :color="$getColor()"
            :title="$getTitle()"
            :description="$getDescription()"
            :link="$getLink()"
            :link-label="$getLinkLabel()"
            :link-blank="$getLinkBlank()"
            :border="$getBorder()"
    />
</x-dynamic-component>