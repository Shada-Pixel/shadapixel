const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                dm: ['DM Sans', 'sans-serif'],
                mont: ['Montserrat', 'sans-serif'],
                space: ['Space Grotesk', 'sans-serif']
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'seagreen': '#15B6A4',
                'nblue': '#101827',
                'lightblack': '#52525B',
                'cream': '#EFEEEA'
            }
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};

