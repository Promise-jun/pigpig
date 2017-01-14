var gulp=require('gulp');//基础gulp模块
var webserver=require('gulp-webserver');//webserver服务器模块
var url=require('url');
var fs=require('fs');//fs  filesystem
var sass=require('gulp-sass');
var webpack=require('gulp-webpack');
var uglify=require('gulp-uglify');
var minifyCss=require('gulp-minify-css');
var rev=require('gulp-rev');
var revCollector=require('gulp-rev-collector');
var watch=require('gulp-watch');
var sequence=require('gulp-watch-sequence');
var named=require('vinyl-named');

// index.html页面
gulp.task('copy-index',function(){
	return gulp.src('./src/index.html')
	.pipe(gulp.dest('./www'));
})
// img目录
gulp.task('copy-img',function(){
	return gulp.src('./src/img/**')
	.pipe(gulp.dest('./www/img'));
})
// css
gulp.task('copy-css',function(){
	return gulp.src('./src/styles/index.css')
	// .pipe(sass())
	// .pipe(minifyCss())
	.pipe(gulp.dest('./www/css'))
})
// js
gulp.task('copy-js',function(){
	return gulp.src('./src/scripts/index.js')
	.pipe(named())
	.pipe(webpack())
	// .pipe(uglify())
	.pipe(gulp.dest('./www/js'))
})
// template
gulp.task('copy-template',function(){
	return gulp.src('./src/template/**')
	.pipe(gulp.dest('./www/template'));
})
// webserver
gulp.task('webserver',function(){
	gulp.src('./www')
	.pipe(webserver({
		livereload:false,
		//directoryListing:true,//目录结构
		open:true,
	}));//end gulp
})
// watch
gulp.task('watch',function(){
	gulp.watch('./src/index.html',['copy-index']);
	gulp.watch('./src/styles/index.css',['copy-css']);
	gulp.watch('./src/template/**',['copy-template']);
	gulp.watch('./src/img',['copy-img']);
});
// 默认监听
gulp.task('default',['webserver','watch']);