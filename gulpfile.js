var gulp = require('gulp');
sass = require("gulp-sass"),
postcss = require("gulp-postcss");
autoprefixer = require("autoprefixer");
var sourcemaps = require('gulp-sourcemaps'); 
var browserSync = require('browser-sync').create(); 
var cssbeautify = require('gulp-cssbeautify');
var beautify = require('gulp-beautify');


/*******************  LTR   ******************/


//_______ task for scss folder to css main style 
gulp.task('watch', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('assets/scss/**/*.scss') 
		.pipe(sourcemaps.init())                       
		.pipe(sass())
		.pipe(sourcemaps.write(''))   
		.pipe(gulp.dest('assets/css'))
		.pipe(browserSync.reload({
		  stream: true
	}))
})


//_______task for admin-custom
gulp.task('admin', function(){
   return gulp.src('assets/css/admin-custom.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'));
		
})


//_______task for sidemenu
gulp.task('menu', function(){
   return gulp.src('assets/css/sidemenu.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'));
		
})



/*******************  Beautify  ******************/

//_______ task for beautifying css
gulp.task('beautify', function() {
    return gulp.src('assets/css/*.css')
        .pipe(beautify.css({ indent_size: 4 }))
        .pipe(gulp.dest('assets/css'));
});

function defaultTask(cb) {
        // place code for your default task here
        cb();
      }
      
      exports.default = defaultTask



