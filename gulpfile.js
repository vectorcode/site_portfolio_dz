var gulp = require("gulp"),
    livereload = require("gulp-livereload"),
		opn = require("opn"),
    browserify = require('gulp-browserify'),  
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');
    styl = require('gulp-styl'); 


//css 
gulp.task('css', function(){
  livereload.changed();
});

//php
gulp.task('php', function(){
  livereload.changed();
});
//js
gulp.task('js', function(){
  livereload.changed();
});
//сборка скриптов
gulp.task('scripts', function() {  
    gulp.src(['./app/bower/jquery/dist/jquery.js', './app/js/*.js'])
       /* .pipe(browserify())*/
        /*.pipe(uglify())*/
        .pipe(concat('build.js'))
        .pipe(gulp.dest('./app/build_js'))
})
//сборка css
gulp.task('styles', function() {  
    gulp.src(['./app/bower/normalize.css/normalize.css', './app/css/*.css'])
        /*.pipe(styl({compress : false}))*/
        .pipe(concat('build.css'))
        .pipe(gulp.dest('./app/build_css'))
})


// Слежка
gulp.task('watch', function () {
  livereload.listen();
  gulp.watch(['./app/*.php'], ['php']);
  gulp.watch(['./app/js/*.js'], ['scripts']);
  gulp.watch(['./app/css/*.css'], ['styles']);
  /*opn('http://pkdz.loc/app/');*/
});

// Задача по-умолчанию
gulp.task('default', ['watch']);


