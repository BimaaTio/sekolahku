/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  darkMode:'class',
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      colors:{
        primary: '#6366f1',
        dark: 'rgb(15, 23, 42)',
        secondary: '#64748b',
      },
    },
  },
  plugins: [
    require("daisyui")
  ],
}

