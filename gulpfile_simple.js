/* 
* @Author: darkless
* @Date:   2016-03-22 16:00:36
* @Last Modified by:   darkless
* @Last Modified time: 2016-03-23 14:32:04
*/

var gulp = require('gulp');

//压缩JS

// 获取 uglify 模块（用于压缩 JS）
var uglify = require('gulp-uglify')
// 压缩 JavaScript 文件
gulp.task('script', function() {
    // 1. 找到
    gulp.src('js/*.js')
    // 2. 压缩
        .pipe(uglify())
    // 3. 另存
        .pipe(gulp.dest('dist/js'));
});

//压缩CSS
//获取gulp-minify-css模块

var minifyCSS = require('gulp-minify-css')
gulp.task('css', function(){
    gulp.src('style/*.css')
        .pipe(minifyCSS())
        .pipe(gulp.dest('dist/style'));
});

//压缩图片
//获取imagemin模块

var imagemin = require('gulp-imagemin')
gulp.task('image', function(){
    gulp.src('img/*.*')
        .pipe(imagemin({progressive: true}))
        .pipe(gulp.dest('dist/img'));
});

//编译less
//
var less = require('gulp-less')
gulp.task('less', function(){
    gulp.src('style/*.less')
        .pipe(less())
        .pipe(gulp.dest('dist/style'));
})

//其他文件
//
gulp.task('php', function(){
    gulp.src('script/*.php')
        .pipe(gulp.dest('dist/script'));

    gulp.src('stage/*.php')
        .pipe(gulp.dest('dist/stage'));

    gulp.src('./*.php')
        .pipe(gulp.dest('dist'));
})


/*-------------------------------------------*/
//自动执行
var watchPath = require('gulp-watch-path')
var combiner = require('stream-combiner2')

gulp.task('watchjs', function () {
    gulp.watch('js/*.js', function (event) {
        var paths = watchPath(event, './', 'dist/')
        /*
        paths
            { srcPath: 'js/log.js',
              srcDir: 'js/',
              distPath: 'dist/js/log.js',
              distDir: 'dist/js/',
              srcFilename: 'log.js',
              distFilename: 'log.js' }
        */
        gutil.log(gutil.colors.green(event.type) + ' ' + paths.srcPath)
        gutil.log('Dist ' + paths.distPath)

        var combined = combiner.obj([
            gulp.src(paths.srcPath),
            uglify(),
            gulp.dest(paths.distDir)
        ])

        combined.on('error', handleError)
    })
})

gulp.task('auto', ['watchjs']);

gulp.task('default', ['script', 'css', 'image', 'less', 'php']);
