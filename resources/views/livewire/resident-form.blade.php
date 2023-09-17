<div>
    <div>
        {{ $this->form }}
    </div>
    <div class="mt-5">
        <x-button label="Submit" blue class="font-medium" wire:click="submitForm" spinner="submitForm" icon="save" />
    </div>
</div>
