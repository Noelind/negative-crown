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
            '40': '4rem',
        }
    },
  },
  plugins: [],
}
