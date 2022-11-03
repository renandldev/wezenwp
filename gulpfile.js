'use_strict';

/**
 * 
 * Implementa o processamento de Sass e minificação de arquivos javascript
 * 
 * @package wezenwp
 * 
 * @since 1.0.0
 * 
 */

const gulp   = require('gulp');
const sass   = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');
const smaps  = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');

function sassCompress() {
    return gulp.src('src/sass/**/**.scss')
            .pipe(smaps.init())
            .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
            .pipe(rename({suffix: '.min'}))
            .pipe(smaps.write('./maps'))
            .pipe(gulp.dest('assets/css'));
}

exports.sassCompress = sassCompress;
