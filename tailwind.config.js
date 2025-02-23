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
                success: '#16A34A',
                danger: '#FF0000',
                warning: '#FFFF00',
                info: '#0000FF'
            },
        },
    },

    plugins: [forms, typography],
};
