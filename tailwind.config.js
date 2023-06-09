/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "monster-green": '#14D103',
      },
      fontFamily: {
        sans: ["Nunito", "sans-serif"],
        serif: ["Grenze", "serif"],
      },
      backgroundImage: {
        "monster-hero": "url('../assets/hero.png')",
      },
      minHeight: {
        "screen-90": "90vh",
        "screen-80": "80vh",
      }
    },
  },
  plugins: [],
}

