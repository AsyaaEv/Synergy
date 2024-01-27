/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            textColor: {
                orange: "#FB7A24",
                putih: "#F1E8DD",
                hitam: "#1D1B1A",
            },
            backgroundColor: {
                orange: "#FF7423",
                putih: "#F1E8DD",
                hitam: "#1D1B1A",
            },
        },
    },
    plugins: [],
};
