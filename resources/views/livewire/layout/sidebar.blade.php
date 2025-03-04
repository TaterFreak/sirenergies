<?php

namespace App\Http\Livewire\Layout;

use Livewire\Volt\Component;

new class () extends Component {
    public $links = [
        0 => [
            'name' => 'Services',
            'sublinks' => [
                0 => [
                    'name' => 'Prix du marché',
                    'route' => '/prix-du-marche',
                    'icon' => 'presentation-chart-line',
                ],
                1 => [
                    'name' => 'Prix spot',
                    'route' => '/prix-spot',
                    'icon' => 'currency-dollar',
                ],
                2 => [
                    'name' => 'Convertisseur de fichiers de mesures',
                    'route' => '/convertisseur',
                    'icon' => 'calculator',
                ],
                3 => [
                    'name' => 'Emissions de CO2 & exports',
                    'route' => '/emissions-co2-exports',
                    'icon' => 'cloud',
                ],
                4 => [
                    'name' => 'Forward vs Spot',
                    'route' => '/forward-vs-spot',
                    'icon' => 'chart-bar-square',
                ],
                5 => [
                    'name' => 'Optimiseur de puissances souscrites',
                    'route' => '/optimiseur-de-puissance',
                    'icon' => 'cpu-chip',
                ],
                6 => [
                    'name' => 'Periodes de pointe',
                    'route' => '/periodes-de-pointe',
                    'icon' => 'rocket-launch',
                ],
            ],
        ],
        1 => [
            'name' => 'Mes informations',
            'sublinks' => [
                0 => [
                    'name' => 'Point de livraison',
                    'route' => '/pdl',
                    'icon' => 'map-pin',
                ],
                1 => [
                    'name' => 'Groupes',
                    'route' => '/groupes',
                    'icon' => 'rectangle-group',
                ],
                2 => [
                    'name' => 'Contrats',
                    'route' => '/contrats',
                    'icon' => 'document-check',
                ],
                3 => [
                    'name' => 'Factures',
                    'route' => '/factures',
                    'icon' => 'document-currency-dollar',
                ],
                4 => [
                    'name' => 'Mandats',
                    'route' => '/mandats',
                    'icon' => 'document-text',
                ],
                5 => [
                    'name' => 'Lettres de résiliation',
                    'route' => '/lettres-de-resiliation',
                    'icon' => 'x-circle',
                ],
            ],
        ],
    ];
};

?>

<div x-data="{ sidebar: $store.sidebarStore }" @click.outside="sidebar.closeSidebar()">
    <div class="left-4 top-4 absolute lg:hidden">
        <button @click="sidebar.toggleSidebar()" x-show="!sidebar.open" class="text-font-primary">
            <x-heroicon-o-bars-4 height="30" width="30" />
        </button>
        <button @click="sidebar.toggleSidebar()" x-bind:class="sidebar.open ? '!block' : ''" class="hidden">
            <x-heroicon-o-x-mark height="30" width="30" class="text-font-primary" />
        </button>
    </div>
    <aside x-bind:class="sidebar.open ? '!translate-x-0 w-90' : ''" @mouseover="sidebar.openSidebar()"
        @moquseout="sidebar.closeSidebar()"
        class="shadow-sm fixed top-16 left-0 z-40 w-18 h-screen transition-all -translate-x-full lg:translate-x-0 overflow-x-hidden">
        <div class="h-full pt-4 pb-20 overflow-y-auto bg-background-ternary">
            <ul class="space-y-2 font-medium w-90">
                @foreach ($links as $key => $link)
                    <li x-data="{ itemOpen: true }">
                        <x-sidebar-tab @click="itemOpen = !itemOpen">
                            <span x-bind:class="sidebar.open ? '!visible' : ''"
                                class="invisible">{{ $link['name'] }}</span>
                        </x-sidebar-tab>
                        <ul x-show="itemOpen">
                            @foreach ($link['sublinks'] as $key => $sublink)
                                <li>
                                    <x-sidebar-link href="#">
                                        <x-dynamic-component :component="'heroicon-o-' . $sublink['icon']" height="20" width="20"
                                            class="mr-1" />
                                        <span x-bind:class="sidebar.open ? '!inline' : ''"
                                            class="hidden">{{ $sublink['name'] }}</span>
                                    </x-sidebar-link>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
