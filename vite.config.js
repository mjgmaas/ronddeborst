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
    ...(process.env.NODE_ENV === 'development' ? {
        server: {
            host: true, // 0.0.0.0 inside container
            port: Number(process.env.VITE_PORT) || 5173,
            strictPort: true,
            cors: true,
            hmr: {
                host: process.env.VITE_HMR_HOST || 'host.docker.internal',
                port: Number(process.env.VITE_PORT) || 5173,
                protocol: 'ws',
            },
            watch: {
                usePolling: true,
            },
        }
    } : {})
});
