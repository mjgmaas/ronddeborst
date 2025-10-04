import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: true, // 0.0.0.0 inside container
        port: Number(process.env.VITE_PORT) || 5173,
        strictPort: true,
        cors: true,
        hmr: {
            host: process.env.HMR_HOST || 'host.docker.internal',
            port: Number(process.env.VITE_PORT) || 5173,
            protocol: 'ws',
        },
        watch: {
            usePolling: true,
        },
    },
});
