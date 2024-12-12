let mix = require('laravel-mix');

mix
    .copy('resources/vendor/bootstrap/css/bootstrap.min.css', 'public/vendor/bootstrap/css')
    .copy('resources/vendor/bootstrap-icons/bootstrap-icons.css', 'public/vendor/bootstrap-icons')
    .copy('resources/vendor/aos/aos.css', 'public/vendor/aos')
    .copy('resources/vendor/swiper/swiper-bundle.min.css', 'public/vendor/swiper')
    .copy('resources/vendor/glightbox/css/glightbox.min.css', 'public/vendor/glightbox')
    .js('resources/js/main.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .setPublicPath('public');
