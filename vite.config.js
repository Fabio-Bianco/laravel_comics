import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/sass/app.scss', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  css: {
    transformer: 'postcss', // disabilita lightningcss
  },
  build: {
    rollupOptions: {
      external: ['fsevents'], // evita crash su Windows in build
    },
  },
})
