var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnext = require('gulp-cssnext');
var babel = require('gulp-babel');

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
        .watch(paths.jsx, ['babel']);
});

gulp.task('default', ['watch'])
