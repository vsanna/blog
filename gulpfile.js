var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnext = require('gulp-cssnext');
var babel = require('gulp-babel');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");

var paths = {
  'scss': 'scss/',
  'css': 'css/',
  'jsx': 'jsx/',
  'js': 'js/',
}

gulp.task('scss', function() {
  return gulp.src(paths.scss + '**/*.scss')
    .pipe(sass())
    .on('error', function(err) {
      console.log(err.message);
    })
    .pipe(cssnext())
    .pipe(gulp.dest(paths.css))
});

gulp.task('babel', function(){
  gulp.src(paths.jsx + '**/*.jsx')
      .pipe(babel())
      .pipe(gulp.dest(paths.js))
})

gulp.task('watch',['scss'], function(){
    gulp.watch(paths.scss, ['scss'])
});

gulp.task('finalize-css', function(){
  return gulp.src(paths.css + 'main.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
      extname: '.min.css'
    }))
    .pipe(gulp.dest(paths.css))
})

gulp.task('finalize-js', function(){
  return gulp.src(paths.jsx + '/*.jsx')
    .pipe(babel())
    .pipe(uglify())
    .pipe(rename({
      extname: '.min.js'
    }))
    .pipe(gulp.dest(paths.js))
})

gulp.task('finalize',['finalize-js', 'finalize-css'], function(){
  return
})

gulp.task('default', ['watch'])
