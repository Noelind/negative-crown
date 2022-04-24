const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    fontFamily: {
        sans: ['Manrope', 'sans-serif']
    },
    extend: {
        width:{
            'vscreen': '100vh',
        },
        aspectRatio: {
            '3/2': '3 / 2',
        },
        grayscale: {
            50: '50%',
        },
        transitionDuration: {
            1500: '1500ms',
            2000: '2000ms',
            3000: '3000ms',
        },
        transformOrigin: {
            'top-center': 'top center',
        },
        letterSpacing: {
            'widest-plus': '0.25em',
        },
        fontSize:{
            '2.5xl':'1.8rem',
        },
        lineHeight:{
            '11': '3rem',
            '12': '3.5rem',
            '13': '4rem',
            '40': '4rem',
        },
        lineClamp: {
            7: '7',
            8: '8',
            9: '9',
            10: '10',
          }

    },
    screens: {
        'xsm': '400px',
        ...defaultTheme.screens,
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}
