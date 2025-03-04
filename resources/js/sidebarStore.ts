Alpine.store('sidebarStore', {
    open: false,
    openSidebar() {
        this.open = true;
    },
    closeSidebar() {
        this.open = false;
    },
    toggleSidebar() {
        this.open = !this.open;
    }
} as { open: boolean; openSidebar: () => void, closeSidebar: () => void, toggleSidebar: () => void });