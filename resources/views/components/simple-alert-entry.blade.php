<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <x-filament-simple-alert::simple-alert
            :icon="$getIcon()"
            :icon-vertical-alignment="$getIconVerticalAlignment()"
            :color="$getColor()"
            :title="$getTitle()"
            :description="$getDescription()"
            :link="$getLink()"
            :link-label="$getLinkLabel()"
            :link-blank="$getLinkBlank()"
            :actions-vertical-alignment="$getActionsVerticalAlignment()"
            :actions="$getActions()"
            :border="$getBorder()"
    />
</x-dynamic-component>