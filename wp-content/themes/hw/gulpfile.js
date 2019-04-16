'use strict'

var gulp = require('gulp'),
    scss = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    // babel = require('gulp-babel'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    autoprefixer = require('gulp-autoprefixer'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    imagemin = require('gulp-imagemin'),
    mode = require('gulp-mode')({
        modes: ["production", "development"],
        default: "development",
        verbose: false
    });



var SASS_INCLUDE_PATHS = [
]
var LIB_JS_INCLUDE_PATHS = [
    './node_modules/jquery/dist/jquery.js',
]

function handleError (err) {
    console.log(err.toString())
    this.emit('end')
}

gulp.task('lib-js', function () {
    return gulp.src(LIB_JS_INCLUDE_PATHS)
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(mode.development(sourcemaps.init()))
        .pipe(concat('app.js'))
        .pipe(uglify())
        .pipe(mode.development(sourcemaps.write()))
        .pipe(gulp.dest('./assets/js'))
})

gulp.task('styles', function () {
    return gulp.src('./sass/main.scss')
        .pipe(plumber({errorHandler: handleError}))
        .pipe(mode.development(sourcemaps.init()))
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(autoprefixer({browsers: ['last 2 versions', 'safari 8', 'ie 11', 'opera 12.1', 'ios 6', 'android 4']}))
        .pipe(mode.development(sourcemaps.write()))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(gulp.dest('./assets/css'))
})

gulp.task('scripts', function () {
    return gulp.src(['./source-js/main.js'])
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(sourcemaps.init())
        .pipe(babel({compact: true}))
        .pipe(rename({suffix: '.min'}))
        // .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./assets/js/'))
})
gulp.task('images', function () {
    return gulp.src('./images/**/*')
        .pipe(plumber({ errorHandler: handleError }))
        .pipe(imagemin())
        .pipe(gulp.dest('./assets/images'))
})

gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', gulp.series('styles'))
    gulp.watch('./source-js/main.js', gulp.series('scripts'))
    gulp.watch('./images/*', gulp.series('images'))
})

gulp.task('default', function (done) {
    return gulp.series(
        'styles', 'scripts', 'images'
    )(done)
})