module.exports = function(grunt) {
grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.initConfig({
	  uglify: {
	    my_target: {
	      files: {
	        'dest/app.min.js': ['assets/angular/app.js']
	      }
	    }
	  }
	});
	
	grunt.registerTask('default');
};