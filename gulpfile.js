var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');


gulp.task('serve', function(){
	browserSync.init({
		server:"./"
	});

	gulp.watch('scss/*.scss', ['sass']);
	gulp.watch('./*.html').on('change', browserSync.reload);
	gulp.watch('./admin/*.html').on('change', browserSync.reload);

});



gulp.task('sass', function(){
	gulp.src('./scss/style.scss')
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./css/'))
	.pipe(browserSync.stream());
});

gulp.task('sass-watch', function(){
	gulp.watch('scss/*.scss', ['sass']);
});

gulp.task('default', ['serve', 'sass'], function(){

});