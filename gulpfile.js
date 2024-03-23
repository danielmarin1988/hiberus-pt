const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));


gulp.task('sass', function(){
    return gulp.src('./app/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
});

gulp.task('watch', function(){
    gulp.watch('app/scss/**/*.scss', gulp.series('sass')); // Ajuste aquí también para incluir todos los archivos .scss en todos los subdirectorios
});