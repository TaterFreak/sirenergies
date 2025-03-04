<?php

use App\Models\Company;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Volt\Component;

new class () extends Component {
    public Collection $companies;
    public string $currentCompanyName;
    public Company|null $company;

    public function mount()
    {
        $this->companies = Company::all();

        $companySlug = auth()->user()->defaultCompany;
        $this->company = Company::where('slug', $companySlug)->first();
    }

    public function changeCompany($companyId)
    {
        $this->company = Company::find($companyId);
        $this->dispatch('companyChanged', $this->company);
    }
}; ?>

<div x-data="{
    initialize() {
        Livewire.on('companyChanged', company => {
            $store.companyStore.updateCompany(company[0]);
        });
        if (!$store.companyStore.company) {
            $store.companyStore.updateCompany(@js($company));
        }
    }
}" x-init="initialize()">
    <x-dropdown align="left" width="64">
        <x-slot name="trigger">
            <div class="lg:hidden">
                <x-heroicon-o-building-office-2 height="25" width="25" class="text-font-primary" />
            </div>
            <div class="hidden lg:block">
                <x-button-default style="link">
                    <span class="text-base" x-text="$store.companyStore.company.name"></span>
                    <x-heroicon-o-chevron-up-down />
                </x-button-default>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="divide-y divide-divide-primary">
                <div>
                    <x-dropdown-title>{{ __('Gérer l\'entreprise') }}</x-dropdown-title>
                    <ul>
                        <li>
                            <x-dropdown-link>
                                {{ __('Préférences de l\'entreprise') }}
                            </x-dropdown-link>
                        </li>
                        <li>
                            <x-dropdown-link>
                                {{ __('Créer une nouvelle entreprise') }}
                            </x-dropdown-link>
                        </li>
                    </ul>
                </div>
                <div>
                    <x-dropdown-title>Permuter les entreprises</x-dropdown-title>
                    <ul>
                        @foreach ($companies as $company)
                            <li wire:click="changeCompany({{ $company->id }})">
                                <x-dropdown-link class="text-font-primary">
                                    {{ $company->name }}
                                </x-dropdown-link>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </x-slot>
    </x-dropdown>
</div>
