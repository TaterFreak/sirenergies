Alpine.store('theme', {
    current: localStorage.getItem('theme') || 'light',
    changeTheme() {
        this.current = this.current === 'light' ? 'dark' : 'light';
        
        const htmlEl = document.querySelector('html');
        if (htmlEl) {
            htmlEl.classList.toggle('dark');
        }
        
        localStorage.setItem('theme', this.current);
    }
} as { current: string; changeTheme: () => void });