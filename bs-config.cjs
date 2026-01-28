module.exports = {
    proxy: "http://127.0.0.1:8000", // Laravel dev server URL (php artisan serve)
    files: [
        "resources/views/**/*.blade.php",   // Watch Blade templates
        "resources/css/**/*.css",           // Watch CSS files
        "public/js/**/*.js"                 // Watch JS files
    ],
    open: false,       // Prevents automatically opening browser
    notify: false,     // Removes BrowserSync notifications
    injectChanges: true, // Inject CSS changes without full reload
    reloadDelay: 0
};
