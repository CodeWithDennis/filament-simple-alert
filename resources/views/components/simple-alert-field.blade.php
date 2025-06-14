<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-filament-simple-alert::simple-alert
            :icon="$getIcon()"
            :icon-vertical-alignment="$getIconVerticalAlignment()"
            :icon-animation="$getIconAnimation()"
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
