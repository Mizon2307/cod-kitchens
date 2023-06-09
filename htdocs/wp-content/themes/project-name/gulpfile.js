const gulp = require('gulp')
const browsersync = require('browser-sync')
const gulpif = require('gulp-if')
const concat = require('gulp-concat')
const del = require('del')
const sourcemaps = require('gulp-sourcemaps')
const postcss = require('gulp-postcss')
const cssnano = require('gulp-cssnano')
const babel = require('gulp-babel')
const terser = require('gulp-terser')

const env = process.env.NODE_ENV || 'development'

gulp.task('sync', function (done) {
	browsersync.init({
		files: ['**/*.php', '**/*.html', '**/*.css', '**.*.js'],
		port: 8000,
		proxy: 'http://project-name.test',
		open: true,
		notify: false,
		ui: false,
		logSnippet: false,
		snippetOptions: {
			ignorePaths: 'wp-admin/**',
		},
	})
	done()
})

gulp.task('reload', function (done) {
	browsersync.reload()
	done()
})

gulp.task('clean', function () {
	return del(['./assets/styles/dist/**/*', './assets/scripts/dist/**/*'])
})

gulp.task('styles', function () {
	return gulp
		.src('./assets/styles/src/main.css')
		.pipe(sourcemaps.init())
		.pipe(postcss())
		.pipe(gulpif(env === 'production', cssnano()))
		.pipe(gulpif(env === 'development', sourcemaps.write('.')))
		.pipe(gulp.dest('./assets/styles/dist/'))
		.pipe(gulpif(env === 'development', browsersync.stream()))
})

gulp.task('scripts', function () {
	return gulp
		.src('./assets/scripts/src/main.js')
		.pipe(sourcemaps.init())
		.pipe(babel())
		.pipe(concat('main.js'))
		.pipe(gulpif(env === 'production', terser()))
		.pipe(gulpif(env === 'development', sourcemaps.write('.')))
		.pipe(gulp.dest('./assets/scripts/dist/'))
		.pipe(gulpif(env === 'development', browsersync.stream()))
})

gulp.task('watch', function () {
	gulp.watch(
		['./assets/styles/src/**/*.css', './tailwind.config.js'],
		{ interval: 500 },
		gulp.series('styles', 'reload')
	)
	gulp.watch(
		['./assets/scripts/src/**/*.js'],
		{ interval: 500 },
		gulp.series('scripts', 'reload')
	)
	gulp.watch(
		['./*.php', './partials/**/*.php', './templates/**/*.php'],
		{ interval: 500 },
		gulp.series('reload')
	)
})

gulp.task(
	'default',
	gulp.series('clean', gulp.parallel('styles', 'scripts'), 'sync', 'watch')
)
gulp.task('build', gulp.series('clean', gulp.parallel('styles', 'scripts')))
