import { Alpine as AlpineType } from 'alpinejs';

declare global {
  const Alpine: AlpineType
  const Livewire: any;
}

declare global {
    interface Window {
        axios:any;
    }
}