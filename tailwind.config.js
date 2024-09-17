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
        brown: {
          50: '#faf3e0',
          100: '#f5e0b7',
          200: '#f0d09d',
          300: '#eab77d',
          400: '#e09b4c',
          500: '#d07f1f',
          600: '#b7691a',
          700: '#945014',
          800: '#6d380f',
          900: '#4d270a',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
