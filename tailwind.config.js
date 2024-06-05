/** @type {import('tailwindcss').Config} */

export default {
  content: [
      "./resources/views/**/*.blade.php",
  ],
    safelist:[
        "w-32",
        "w-48",
        "w-40",
    ],
  theme: {
    fontFamily: {
      'iranian-sans': ['Iranian-sans', 'sans-serif'],
      'dana-regular': ['dana-regular'],
    },
  fontSize: {
    'xxs': '.75rem',  // 10px
    'xs': '.875rem',  // 12px
    'sm': '.925rem', // 14px
    'base': '1rem',  // 16px
    'lg': '1.125rem', // 18px
    'xl': '1.25rem', // 20px
    '2xl': '1.5rem', // 24px
    '3xl': '1.875rem', // 30px
    '4xl': '2.25rem', // 36px
    '5xl': '3rem',     // 48px
    '6xl': '4rem',     // 64px
    '7xl': '5rem',     // 64px
  },
  fontWeight: {
    '300': 300,
    '400': 400,
    'bold': 'bold',
    '500': 500,
  },
  extend: {
      corePlugins: {
          preflight: false,
      },
      container: {
          padding: {
              DEFAULT: "1rem",
              //     sm: "2rem",
              //     lg: "4rem",
              //     xl: "5rem",
              //     "2xl": "6rem",
          },
          // default breakpoints but with 40px removed
          screens: {
              sm: "540px",
              md: "720px",
              lg: "960px",
              xl: "1140px",
              "2xl": "1320px",
          },
      },
      colors: {
          // Primary colors
          'PrimaryMain': '#FB6535',
          'PrimaryTint1': '#FFF7F5',
          'PrimaryTint2': '#FED8CC',
          'PrimaryTint3': '#FCB29A',
          'PrimaryShade1': '#B04725',
          'PrimaryShade2': '#642815',
          'PrimaryShade3': '#32140B',

          // Tertiary colors
          'TertiaryMain': '#D69E5C',
          'TertiaryTint1': '#FDFAF7',
          'TertiaryTint2': '#F5E6D6',
          'TertiaryTint3': '#EACEAD',
          'TertiaryShade1': '#966E40',
          'TertiaryShade2': '#563F25',
          'TertiaryShade3': '#151009',

          // Gray colors
          'GrayMain': '#B4B3B2',
          'GrayTint1': '#FBFBFB',
          'GrayTint2': '#ECEBEB',
          'GrayTint3': '#D9D8D8',
          'GrayShade1': '#7E7D7D',
          'GrayShade2': '#484747',
          'GrayShade3': '#121212',

          // Secondary colors
          'SecondaryMain': '#FCDC73',
          'SecondaryTint1': '#FFFDF8',
          'SecondaryTint2': '#FEF6DC',
          'SecondaryTint3': '#FDEDB9',
          'SecondaryShade1': '#B09A51',
          'SecondaryShade2': '#65582E',
          'SecondaryShade3': '#19160C',

          // Error colors
          'ErrorMain': '#DC3545',
          'ErrorBg': '#FEF7F8',

          // Success colors
          'SuccessMain': '#28A745',
          'SuccessBg': '#F7FCF8',

          // Warning colors
          'WarningMain': '#FFC107',
          'WarningBg': '#FFFDF5',

          'NavBg' : '#FAF2EB',
          'my-red' : '#D1355D',


          //zhav color
          'my-pink' : '#F72585',
          'my-dark-pink' : '#b30454',
          'my-purple' : '#7209B7',
          'my-dark-purple' : '#5c0794',
          'my-blue-navy' : '#3A0CA3',
          'my-blue' : '#4361EE',
          'my-light-blue' : '#4CC9F0',
          'my-black' : '#000000',
          'my-white' : '#ffffff',
          'my-light-gray' : '#8e989f',
          'my-gray' : '#5B5B5D',
          'my-lighter-gray' : '#D1D5DB',


      },

      // width: {
      //   ""
      // }
    },
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}

