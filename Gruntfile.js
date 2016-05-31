module.exports = function(grunt) {
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.initConfig({
	  uglify: {
	    my_target: {
	      files: {
	        'dist/app.min.js': ['assets/angular/app.js']
	      }
	    }
	  },
	  cssmin: {
		  target: {
		    files: {
		      'dist/app.min.css': ['assets/bootstrap/css/bootstrap..css']
		    }
		  }
		}
	});
	
	grunt.registerTask('default',['uglify','cssmin']);
};