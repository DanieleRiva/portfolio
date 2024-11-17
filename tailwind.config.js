/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.php', './src/components/**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-seriff'],
      }
    },
  },
  plugins: [],
}

