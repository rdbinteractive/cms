/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/filament/**/*.blade.php'
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.stone,
                success: colors.green,
                warning: colors.amber,
            },
            fontFamily: {
                'sans': ['roboto', 'sans-serif'],
                'display': ['Oswald', 'serif'],
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
