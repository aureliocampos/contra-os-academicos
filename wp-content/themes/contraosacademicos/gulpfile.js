const gulp = require("gulp");
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const sourcemaps = require("gulp-sourcemaps");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify-es").default;
const concat = require('gulp-concat');


var paths_style = {
    styles: {
        src: "assets/scss/main.scss",
        dest: "build/src/css"
    }
};

var paths_script = {
    scripts: {
        src: "assets/js/**/*.js",
        dest: "build/src/js"
    }
};

function style() {
    return gulp
        .src(paths_style.styles.src)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(paths_style.styles.dest))
}

function compress() {
    return gulp
        .src(paths_script.scripts.src)
        .pipe(sourcemaps.init())
        .pipe(concat('build.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(paths_script.scripts.dest));
}

function watch() {
    gulp.watch(paths_style.styles.src, style);
    gulp.watch(paths_script.scripts.src, compress);
}

exports.watch = watch;
exports.style = style;
exports.compress = compress;

var build = gulp.parallel(style, compress, watch);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', build);
