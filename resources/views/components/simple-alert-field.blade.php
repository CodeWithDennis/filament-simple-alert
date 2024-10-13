<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-filament-simple-alert::simple-alert
            :icon="$getIcon()"
            :icon-vertical-alignment="$getIconVerticalAlignment()"
            :color="$getColor()"
            :title="$getTitle()"
            :description="$getDescription()"
            :link="$getLink()"
            :link-label="$getLinkLabel()"
            :link-blank="$getLinkBlank()"
            :actions="$getActions()"
            :actions-vertical-alignment="$getActionsVerticalAlignment()"
            :border="$getBorder()"
    />
</x-dynamic-component>