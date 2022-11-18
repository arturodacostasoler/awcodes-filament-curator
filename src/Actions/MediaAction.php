<?php


namespace FilamentCurator\Actions;

use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\TextInput;
use FilamentCurator\Forms\Components\MediaPicker;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\View\View;

class MediaAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'filament_tiptap_media';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->modalWidth('screen');

        $this->modalHeading(__('filament-curator::media-picker-modal.heading'));

        $this->modalActions(fn () => []);

        $this->modalContent(fn(TiptapEditor | MediaPicker $component): View => view('filament-curator::components.media-action', [
            'statePath' => $component->getStatePath(),
            'modalId' => $component->getLivewire()->id . '-form-component-action',
        ]));

//        $this->action(function (TiptapEditor $component, $data) {
//            dd('test curator action');
////            $component->getLivewire()->dispatchBrowserEvent('insert-media', [
////                'statePath' => $component->getStatePath(),
////                'src' => $data['src'],
////                'alt' => $data['alt'] ?? null,
////                'title' => $data['title'],
////                'width' => $data['width'],
////                'height' => $data['height'],
////                'link_text' => $data['link_text'] ?? null,
////            ]);
//        });
    }
}