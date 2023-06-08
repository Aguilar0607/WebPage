/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  content: [
    './templates/**/*.php',
    './index.php',
    './node_modules/flowbite/**/*.js',
    './node_modules/flowbite/dist/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#3961ad',
        'hover-blue': '#66CCFF',
        'elementos-blue': '#9dc4ff',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}
