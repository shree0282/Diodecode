
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function() {
    gulp.src('production/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./build/'));
});

gulp.task('default',function() {
    gulp.watch('production/**/*.scss',['styles']);
});