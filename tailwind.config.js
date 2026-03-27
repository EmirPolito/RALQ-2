/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",

  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx,vue}",
    "./*.php",
    "./php/**/*.php",
    "./video/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        verdeclaro: "#86b499",
        verdeobscuro: "#5f775f",
        gris: "#9D9D9D",
        grisclaro: "#FFFFFF",
        blanco: "#FFFFFF",
        verdeclaroClaro: "rgb(209, 239, 200)",
        negro: "#000000",
      },
      fontFamily: {
        krub: ["Krub", "sans-serif"],
        firasanscondensed: ["Fira Sans Condensed", "sans-serif"],
      },
    },
  },
  plugins: [],
};
