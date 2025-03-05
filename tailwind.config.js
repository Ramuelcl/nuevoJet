import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                darkBg: '#1a202c',
                darkText: '#ffffff',
                lightBg: '#ffffff',
                lightText: '#1a202c',
                // message colors
                success: '#16A34A',
                danger: '#FF0000',
                warning: '#FFFF00',
                info: '#0000FF',
                // Custom colors
                light: {
                    DEFAULT: '#ffffff',
                    text: '#000000',
                },
                dark: {
                    DEFAULT: '#121212',
                    text: '#ffffff',
                },
                ocean: {
                    DEFAULT: '#e6f2ff',
                    text: '#003366',
                },
                forest: {
                    DEFAULT: '#e6f3e6',
                    text: '#006600',
                },
                sunset: {
                    DEFAULT: '#fff0e6',
                    text: '#663300',
                },
                midnight: {
                    DEFAULT: '#1a1a2e',
                    text: '#ffffff',
                },
                dawn: {
                    DEFAULT: '#f0f0f0',
                    text: '#000000',
                },
                dusk: {
                    DEFAULT: '#2e2e2e',
                    text: '#ffffff',
                },
            },
        },
    },

    plugins: [forms, typography],
};

