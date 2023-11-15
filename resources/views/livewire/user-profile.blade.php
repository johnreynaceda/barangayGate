<div>
    <div class="mt-3">
        {{ $this->form }}
    </div>
    <div class="flex items-center gap-4 mt-5">
        {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
        <x-button label="Save" wire:click="save" spinner="save" class="uppercase font-medium" info />
    </div>
</div>
