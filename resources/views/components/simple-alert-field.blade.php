<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-filament-simple-alert::simple-alert
            :icon="$getIcon()"
            :color="$getColor()"
            :title="$getTitle()"
            :description="$getDescription()"
            :link="$getLink()"
            :link-label="$getLinkLabel()"
            :link-blank="$getLinkBlank()"
            :actions="$getActions()"
    />
</x-dynamic-component>