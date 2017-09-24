/*==========================================================
Mondialfrutta Gulpfile.js
Author: Nicola De Lazzari
==========================================================*/


/**
* List Gulp dependencies
**/
var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    prefix      = require('gulp-autoprefixer'),
    plumber     = require('gulp-plumber'),
    notify      = require("gulp-notify"),
    del         = require('del'),
    svgmin      = require('gulp-svgmin'),
    svgstore    = require('gulp-svgstore'),
    cheerio     = require('gulp-cheerio'),
    rename      = require('gulp-rename'),
    browserSync = require('browser-sync').create();


/**
*
* Styles
* - Catch errors (gulp-plumber)
* - Autoprefixer
* - Copy in theme folder
*
**/
gulp.task('styles', function() {
    gulp.src('scss/**/*.scss')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sass())
        .pipe(prefix())
        .pipe(gulp.dest('../docroot/themes/custom/mondialfrutta/css'))
        .pipe(browserSync.stream());
});


/**
*
* Scripts
* - Catch errors (gulp-plumber)
* - Copy in theme folder
*
**/
gulp.task('scripts', function() {
    gulp.src('js/**/*.js')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(gulp.dest('../docroot/themes/custom/mondialfrutta/js'))
        .pipe(browserSync.stream());
});

/**
 *
 * Fonts
 * - Copy in theme folder
 *
 **/
gulp.task('fonts', function() {
    gulp.src('fonts/*')
        .pipe(gulp.dest('../docroot/themes/custom/mondialfrutta/fonts'));
});


/**
*
* Images
* - Copy images in web
*
**/
gulp.task('images', function () {
    del.sync(['../docroot/themes/custom/mondialfrutta/images/**'], {force: true});
    gulp.src('images/**/*.*')
        .pipe(gulp.dest('../docroot/themes/custom/mondialfrutta/images'))
});


/**
 * Gulp Task
 * =========
 * Generate SVG Sprite
 */

gulp.task('svgstore', function() {
    return gulp
        .src( 'svg-sprite/**/*.svg' )
        .pipe(rename({prefix: 'svg-'}))
        .pipe(cheerio({
            run: function ($) {
                $('[fill]').removeAttr('fill');
            },
            parserOptions: { xmlMode: true }
        }))
        .pipe(svgstore({
            inlineSvg: true
        }))
        .pipe(rename('_svgsprite.html.twig'))
        .pipe(gulp.dest('../docroot/themes/custom/mondialfrutta/svg-sprite'))
});



/**
* Watch assets
**/
gulp.task('watch', ['styles', 'scripts', 'images'],  function() {

  browserSync.init({
    proxy: "mondialfrutta.dev"
  });

  gulp.watch('scss/**/*.scss', ['styles']).on('change', browserSync.reload);
  gulp.watch('js/**/*.js', ['scripts']).on('change', browserSync.reload);
  gulp.watch('img/**/*', ['images']).on('change', browserSync.reload);
});


/**
*
* Build task
*
**/
gulp.task('build', function() {
    gulp.start('styles', 'scripts', 'images');
});


/**
*
* Serve - BrowserSync.io
* - Watch CSS, JS, IMG & HTML for changes
* - View project at: localhost:3000
*
**/
gulp.task('serve', ['build','watch'], function() {
    browserSync.init({
        proxy: "mondialfrutta.dev"
    });
});


/**
*
* Default task
* - launch serve
*
**/
gulp.task('default', ['serve']);
