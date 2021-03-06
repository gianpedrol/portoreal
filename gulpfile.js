const gulp = require('gulp');
const babel = require('gulp-babel');
//const sass = require('gulp-sass');
var sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const reload = browserSync.reload;
const concat = require('gulp-concat');
sass.compiler = require('node-sass');

gulp.task('babel', () =>
  gulp
    .src('js/*.js')
    .pipe(sourcemaps.init())
    .pipe(
      babel({
        presets: ['@babel/env'],
      }),
    )
    .pipe(concat('all.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
    .pipe(reload({ stream: true })),
);

gulp.task('browser-sync', function () {
  const files = ['./scss/*.scss', './*.php', './js/*.js'];
  browserSync.init(files, {
    proxy: 'http://newsite:81',
    notify: true,
  });
  gulp.watch('assets/scss/**/*.scss', gulp.series(css));
  gulp.watch('assets/js/*.js'), gulp.series('babel');
  gulp.watch('./*.php').on('change', browserSync.reload);
});

const css = function () {
  return gulp
    .src('assets/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        outputStyle: 'compressed',
      }).on('error', sass.logError),
    )
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./'))
    .pipe(reload({ stream: true }));
};

const watch = function (cb) {
  gulp.watch('assets/scss/**/*.scss', gulp.series(css));
  gulp.watch('assets/js/*.js'), gulp.series('babel');
  gulp.watch('./*.php').on('change', browserSync.reload);
  cb();
};

exports.css = css;
exports.watch = watch;
exports.default = gulp.series(css, 'babel', watch, 'browser-sync');

// gulp.series // one by one
// gulp.parallel // altogether

