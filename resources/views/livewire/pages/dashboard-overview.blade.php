<?php
use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Volt\Component;

new class () extends Component {
    public ?int $data = null;

    public function updateData($companyId)
    {
        $this->data = $companyId;
    }

    public function resetData()
    {
        $this->data = null;
    }
}; ?>

<div x-data="{
    init() {
            $watch('companyStore.company', value => {
                $wire.resetData();
            })
        },
        companyStore: $store.companyStore,
        data: @entangle('data'),
}" x-init="init()">
    <h1 class="text-font-primary font-bold text-xl mb-6">{{ __('Tableau de bord') }}</h1>
    <div class="bg-background-secondary overflow-hidden shadow-xs rounded-lg p-6 text-font-primary">
        <p class="mb-2">{{ __('Bienvenue sur votre compte Pilott pour l\'entreprise ') }}<strong class="font-bold"
                x-text="(companyStore.company?.name ?? '')"></strong></p>
        <x-button-default wire:click="$dispatch('loading');$wire.updateData(companyStore.company.id)"
            wire:loading.attr="disabled">Fetch from database based on store values</x-button-default>
        <p class="mt-1">
            <x-loader />
            <span x-data="loadingIndicator" x-show="!loading && data" x-cloak x-on:loading="loading = true"
                x-on:unloading="loading = false">This is the id of the company fetched from the database:
                {{ $data }}</span>
        </p>
    </div>
</div>
