/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '650px',
      lg: '850px',
      xl: '1000px',
    },
    extend: {
      gridAutoColumns:{
        auto: 'minmax(250px, auto)',
      }
    },
  },
  plugins: [],
}