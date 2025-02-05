import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                barlow: ['Barlow', 'sans-serif'],
            },
            lineHeight: {
                '160': '160%', // custom line height of 160%
            },
            backgroundImage: {
                'navbar-gradient': 'linear-gradient(180deg, #040c14, transparent)',
            },
        },
    },
    plugins: [],
};
