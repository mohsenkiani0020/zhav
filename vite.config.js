import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    css: {
        postCss: {
            plugins: {
                tailwindcss: {},
                autoprefixer: {},
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/user-panel.js',
                'resources/js/admin-panel.js',
                'resources/js/manager-panel.js',
            ],
            refresh: true,
        }),
        react(),
    ],
});
