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
            animation: {
                typewriter: "typewriter 2s steps(30) forwards",
                caret: 'typewriter 2s steps(30) forwards, blink 1s steps(30) infinite 2s',
            },
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
            keyframes: {
                typewriter: {
                    to: {
                        left: "100%"
                    }
                },
                blink: {
                    '0%': {
                      opacity: '0',
                    },
                    '0.1%': {
                      opacity: '1',
                    },
                    '50%': {
                      opacity: '1',
                    },
                    '50.1%': {
                      opacity: '0',
                    },
                    '100%': {
                      opacity: '0',
                    },
                },
            }
        },
    },

    plugins: [forms],
};
