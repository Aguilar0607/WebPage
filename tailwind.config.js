/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.php',
    './index.php',
    './node_modules/flowbite/**/*.js',
    './node_modules/flowbite/dist/**/*.js',
    './node_modules/tw-elements/dist/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        'custom-blue': '#3961ad',
        'hover-blue': '#66CCFF',
        'elementos-blue': '#9dc4ff',
        'seccion': '#EAEBEC',
      },
      fontFamily: {
        'rubik': ['Rubik', 'sans-serif']
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("kutty"),
    require("tw-elements/dist/plugin.cjs"),
    require('tailwindcss-animated'),
  ],
}
