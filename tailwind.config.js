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
                "dental-teal": "#005248",
                "dental-orange": "#FFA700",
                "dental-light-orange": "#FFB84D",
                "dental-dark-teal": "#003A33",
            },
            fontFamily: {
                negrita: ["Inter", "system-ui", "sans-serif"],
            },
        },
    },
    plugins: [],
};
