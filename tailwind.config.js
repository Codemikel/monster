import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                "monster-green": '#14D103',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ["Nunito", "sans-serif"],
                serif: ["Grenze", "serif"],
            },
            backgroundImage: {
                "monster-hero": "url('../assets/hero.png')",
            },
            minHeight: {
                "screen-90": "90vh",
                "screen-80": "80vh",
            }
        },
    },

    plugins: [forms],
};
