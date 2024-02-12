import withMT from "@material-tailwind/html/utils/withMT";
/** @type {import('tailwindcss').Config} */
export default withMT({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primaryD: "#ffff",
                secD: "#f8f7f4",
                orange: "#FB7A24",
                putih: "#F1E8DD",
                hitam: "#1D1B1A",
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
    ],
});
