interface LivewireHook {
    respond: (callback: () => void) => void;
    succeed: (callback: () => void) => void;
    fail: (callback: ({ preventDefault }: { preventDefault: () => void }) => void) => void;
}

Alpine.data('loadingIndicator', () => ({
    loading: false,
    init() {
        Livewire.on('loading', () => {
            this.loading = true;
        });

        Livewire.on('unloading', () => {
            this.loading = false;
        });

        Livewire.hook('request', ({ respond, succeed, fail }: LivewireHook) => {
            respond(() => {
                this.loading = false;
            });

            succeed(() => {
                this.loading = false;
            });

            fail(({ preventDefault }) => {
                this.loading = false;
                preventDefault();
            });
        });
    }
}));