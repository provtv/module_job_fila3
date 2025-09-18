import defaultTheme from 'tailwindcss/defaultTheme';
<<<<<<< HEAD
import forms from '@tailwindcss/forms';
=======
>>>>>>> 688d0704 (first)

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
<<<<<<< HEAD
        './resources/views/**/*.blade.php',
    ],

=======
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
>>>>>>> 688d0704 (first)
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
<<<<<<< HEAD

    plugins: [forms],
=======
    plugins: [],
>>>>>>> 688d0704 (first)
};
