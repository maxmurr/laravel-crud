if (localStorage.theme === 'dark') {
    document.documentElement.classList.add('dark')
    localStorage.setItem('theme', 'dark');
} else {
    document.documentElement.classList.remove('dark')
    localStorage.setItem('theme', 'light');
}
  