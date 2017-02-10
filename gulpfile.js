var gulp = require('gulp'),
	sass = require('gulp-sass'),
	cleanCSS = require('gulp-clean-css');

gulp.task('minify', function(){
	return gulp.src("resources/assets/sass/App.scss")
		.pipe(sass().on('error', sass.logError))
		.pipe(cleanCSS({compatibility: 'ie8'}))
    	.pipe(gulp.dest('public/assets/'));
});