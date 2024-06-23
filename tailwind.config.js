/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      gridAutoColumns:{
        auto: 'minmax(250px, auto)',
      }
    },
  },
  plugins: [],
}