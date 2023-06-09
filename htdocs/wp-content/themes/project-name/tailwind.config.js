module.exports = {
	purge: [
		'./*.php',
		'./blocks/**/*.php',
		'./components/**/*.php',
		'./partials/**/*.php',
		'./templates/**/*.php',
		'./assets/scripts/*.js',
	],
	theme: {},
	variants: {},
	plugins: [require('@tailwindcss/typography')],
}
