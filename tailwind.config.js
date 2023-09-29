/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**.{php,html,js}","./template-parts/*.{php,html,js}","./blocks/*/**.{php,html,js}"],
  theme: {
    extend: {
      fontFamily: {
        'Inter': ['Inter','sans-serif']
      },

      colors: {
        'primary': '#06385F'
      },
      height: {
 

      },
      fontSize: {
      },
      maxWidth:{
      }
    },
  },
  plugins: []
};
