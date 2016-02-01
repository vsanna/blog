var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnext = require('gulp-cssnext');

var paths = {
  'scss': 'scss/',
  'css': 'css/'
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


gulp.task('watch',['scss'], function(){
    gulp.watch('./scss/**/*.scss', ['scss'])
});

gulp.task('default', ['watch'])
