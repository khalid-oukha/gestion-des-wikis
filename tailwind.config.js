/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./Public/pages/**/*.{html,js,php}"],
  content: [
    "./public/*.php",
    "./app/View/*.php",
    "./app/View/dashboard/*.php",
    "./app/View/includes/*.php",
    "./lang/*.php",
    "./lang/*.html",
    "./js/custom.min.js",
  ],

  "tailwindCSS.includeLanguages": {
    plaintext: "php",
  },

  plugins: [require('@tailwindcss/forms')],
  darkMode: "class",
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      colors :{
        'primary' :{
          100: '#457178',

        } ,
        'orange' : '#FB6109',

      }
    },
  },
};
