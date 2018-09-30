module.exports = function (grunt) {
    grunt.initConfig({
      image: {
        dynamic: {
          options: {
            jpegRecompress: ['--strip', '--quality', 'medium', '--min', 20, '--max', 50]
          },
          files: [{
            expand: true,
            cwd: 'images/',
            src: '**/*.jpg',
            dest: 'imagesCompressed'
          }]
        }
      }
    });
   
    grunt.loadNpmTasks('grunt-image');
  };