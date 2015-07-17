'use strict';

var gulp = require('gulp');
var connect = require('gulp-connect');
var sass = require('gulp-sass');

gulp.task('default', ['live', 'watch']);

gulp.task('live', function() {
	connect.server({
		port: 1337,
		livereload: true
	});
});

gulp.task('reload', function() {
	return gulp.src('index.html')
		.pipe(connect.reload());
});

gulp.task('sass', function() {
	gulp.src('assets/sass/screen.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('assets/css'))
		.pipe(connect.reload());
});

gulp.task('watch', function() {
	gulp.watch(['assets/css/screen.css'], ['reload']);
	gulp.watch(['**/*.html'], ['reload']);
	gulp.watch(['assets/sass/**/*.scss'], ['sass']);
});
