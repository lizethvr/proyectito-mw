import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/muebleIndex.css', 'resources/css/muebleCreate.css', 'resources/css/muebleEdit.css', 'resources/css/muebleShow.css'],
            refresh: true,
        }),
    ],
});
