import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Comfortaa', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'rgba': {
                  'black': 'black',
                  'blue-sky': '#2333AB',
                  'blue-sky-100': '#2D27CA',
                  'blue-sky-200': '#224DFF'
        
                }
              }
        },
    },

    plugins: [require('@tailwindcss/forms'),require('@tailwindcss/typography')],
};
