let mix = require('laravel-mix');

mix.webpackConfig({
    module: {
        rules: [{
            test: /\.scss$/,
            loader: "import-glob-loader"
        },
    ]}
});

mix.sass('assets/scss/style.scss', 'style.css')
    .scripts([
        './assets/js/lib/**/*.js',
        './assets/js/scripts/**/*.js'
    ], 'assets/js/scripts.min.js')
    .sourceMaps()
    .options({ 
        processCssUrls: false 
    });
