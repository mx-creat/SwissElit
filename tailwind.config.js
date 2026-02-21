import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'swissred': '#E60000',
                'dark-bg': '#050505',
            },
            letterSpacing: {
                'ultra-wide': '.3em',
            },
            animation: {
                'slow-spin': 'slowSpin 20s linear infinite',
                'reverse-spin': 'reverseSpin 15s linear infinite',
            },
            keyframes: {
                slowSpin: {
                    from: { transform: 'rotate(0deg)' },
                    to: { transform: 'rotate(360deg)' },
                },
                reverseSpin: {
                    from: { transform: 'rotate(360deg)' },
                    to: { transform: 'rotate(0deg)' },
                },
            },
        },
    },

    plugins: [forms],
};