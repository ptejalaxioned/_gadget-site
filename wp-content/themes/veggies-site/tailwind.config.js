/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{html,js,php}", // Include PHP files in components
    "./pages/**/*.{html,js,php}", // Include PHP files in pages
    "./header.php",
    "./inc/blocks/content-banner.php",
    "./inc/blocks/content-turnip-green.php",
    "./inc/blocks/content-specials.php",
    "./inc/blocks/content-about-us.php",
    "./inc/blocks/content-menu.php",
    "./footer.php",
  ],
  // theme: {
  //   extend: {
  //     colors: {
  //       darkgray: '#3f3c3c',
  //       lightgray:'#767676',
  //     },
  //   },
  // },
};

