/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#f0f5ff',
                    100: '#e0eaff',
                    200: '#b8d0ff',
                    300: '#8eb6ff',
                    400: '#5c97ff',
                    500: '#2563eb', // Filament default primary
                    600: '#1d4ed8',
                    700: '#1e40af',
                    800: '#1e3a8a',
                    900: '#172554',
                },
            },
        },
    },
    safelist: [
        'border-primary-600',
        'text-primary-600',
        'bg-primary-600',
        'border-b-2',
        'rounded-t-lg',
        'bg-white',
        'bg-gray-50',
        'text-gray-500',
        'border-transparent',
        'font-bold',
    ],
    plugins: [],
};
