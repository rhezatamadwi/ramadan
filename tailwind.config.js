import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'false',

    theme: {
        extend: {
            colors: {
                // Build your palette here
                transparent: 'transparent',
                current: 'currentColor',
                red: colors.red,
                blue: colors.sky,
                yellow: colors.amber,
                emerald: colors.emerald,
                teal: colors.teal
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
