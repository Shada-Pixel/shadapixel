const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                dm: ["DM Sans", "sans-serif"],
                mont: ["Montserrat", "sans-serif"],
                space: ["Space Grotesk", "sans-serif"],
                // tround: ['Tsukimi Rounded', 'sans-serif']
            },
            colors: {
                transparent: "transparent",
                current: "currentColor",
                seagreen: "#15B6A4",
                nblue: "#101827",
                lightblack: "#52525B",
                cream: "#EFEEEA",
            },
            transitionDelay: {
                125: "125ms",
                175: "175ms",
                225: "225ms",
            },
            keyframes: {
                scroll: {
                    "0%": { transform: "translateX(0)"},
                    "100%": { transform: "translateX(calc(-100% - 1rem))"}
                },
                scrollabs: {
                    "0%": { transform: "translateX(calc(100% + 1rem))"},
                    "100%": {transform: "translateX(0)" }
                }
            },
            animation: {
                scroll: 'scroll 10s linear infinite',
                scrollabs: 'scrollabs'
            }
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};



