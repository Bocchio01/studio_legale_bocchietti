/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'false',
    theme: {
        fontFamily: {
            body: ['verdana', 'times new roman', 'times', 'helvetica'],
        },
        extend: {
            colors: {
                'app-color': 'orange',
            },
        },
    },
    plugins: [],
}

