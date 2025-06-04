// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
// });
import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist', // Vercel expects this folder
    emptyOutDir: true,
  },
  base: './', // relative paths to load CSS/JS
});
