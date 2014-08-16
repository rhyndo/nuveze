'use strict';
module.exports = function (grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		//shell: {
			//patternlab: {
				//command: "php ../core/builder.php -g"
			//}
		//},
		compass: {
			dev: {
				options: {              
					sassDir: ['scss'],
					cssDir: ['css'],
					environment: 'development',
					require: ['susy', 'breakpoint']
				}
			},
			sourceMap: {
				options: {
					sourceComments: 'map',
					sourceMap: 'app.css.map'
				},
				files: {
					'css/app.css': 'scss/app.scss'
				}
			},
		},
		watch: {
			scripts: {
				files: ['scss/*.scss'],
				tasks: ['compass:dev'],
			},
			livereload: {
				files: ['js/*.{js,json}', 'css/*.css','images/**/*.{png,jpg,jpeg,gif,webp,svg}'],
				options: {
					livereload: true
				}
			}
		},
	});
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-shell');

	grunt.registerTask('default', ['compass:dev','watch']);
};
