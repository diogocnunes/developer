import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './source/**/*.blade.php',
        './source/**/*.js',
        './source/**/*.vue',
    ],
    darkMode: 'class', // ← Mude de 'selector' para 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                mono: ['Fira Code', ...defaultTheme.fontFamily.mono],
            },
            colors: {
                gray: defaultTheme.colors.slate,
                primary: defaultTheme.colors.indigo,
            },
        },
    },
    plugins: [],
};