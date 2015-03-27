//var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir(function(mix) {
//    mix.less('app.less');
//});

/**
 * @Author: Antoine07
 * @description: gulp css and sprite for Laravel5
 */
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
// create this directories in your Laravel
var path = {
    'resources': {
        'scss': './resources/assets/scss',
        'icons': './resources/assets/icons',
        'tools': './resources/assets/scss/tools'
    },
    'public': {
        'css': './public/assets/css',
        'images': './public/assets/images'
    }
};
gulp.task('sass', function () {
    return gulp.src(path.resources.scss + '/app.scss')
            .pipe($.sass(
                    {
                        onError: console.error.bind(console, 'SASS error')
                    }
            ))
            .pipe($.minifyCss())
            .pipe($.autoprefixer({
                browsers: ['last 2 versions'],
                cascade: true
            }))
            .pipe($.rename({suffix: '.min'}))
            .pipe(gulp.dest(path.public.css))
            .pipe($.size());
});
//gulp.task('sprite', function () {
//var sprite = gulp.src(path.resources.icons + '/*.png')
//.pipe($.spritesmith({
//imgName: "sprite.png",
//cssName: "_sprite.scss",
//cssTemplate: path.resources.tools + '/_sprite.scss.mustache'
//}));
//sprite.img.pipe(gulp.dest(path.public.images));
//sprite.css.pipe(gulp.dest(path.resources.tools))
//});
gulp.task('watch', function () {
    gulp.watch(path.resources.scss + '/**/*.scss', ['sass']);
});
gulp.task('default', ['watch']);