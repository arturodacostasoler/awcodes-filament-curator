<livewire:curator-panel
    :state-path="$statePath"
    :modal-id="$modalId"
    :directory="$directory"
    :path-generator="$pathGenerator"
    :should-preserve-filenames="$shouldPreserveFilenames"
    :max-width="$maxWidth"
    :min-size="$minSize"
    :max-size="$maxSize"
    :rules="$rules"
    :accepted-file-types="$acceptedFileTypes"
    :disk-name="$diskName"
    :visibility="$visibility"
    :image-crop-aspect-ratio="$imageCropAspectRatio"
    :image-resize-target-width="$imageResizeTargetWidth"
    :image-resize-target-height="$imageResizeTargetHeight"
    :selected="$selected ?? null"
/>
