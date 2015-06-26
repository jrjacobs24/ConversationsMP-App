sassFiles = {
    'css/app.css': 'scss/app.scss'
}

module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Copy web assets from bower_components to more convenient directories.
        copy: {
            main: {
                files: [
                    // Vendor scripts.
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass-official/assets/javascripts/',
                        src: ['**/*.js'],
                        dest: 'scripts/bootstrap-sass-official/'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/jquery/dist/',
                        src: ['**/*.js', '**/*.map'],
                        dest: 'scripts/jquery/'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-material-design/scripts/',
                        src: ['**/*.js'],
                        dest: 'scripts/material/'
                    },

                    // Fonts.
                    {
                        expand: true,
                        filter: 'isFile',
                        flatten: true,
                        cwd: 'bower_components/',
                        src: ['bootstrap-sass-official/assets/fonts/**'],
                        dest: 'fonts/'
                    },
                    {
                        expand: true,
                        filter: 'isFile',
                        flatten: true,
                        cwd: 'bower_components/',
                        src: ['bootstrap-material-design/fonts/**'],
                        dest: 'fonts/'
                    },

                    // Stylesheets
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass-official/assets/stylesheets/',
                        src: ['**/*.scss'],
                        dest: 'scss/'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-material-design/sass/',
                        src: ['**/*.scss'],
                        dest: 'scss/material/'
                    }
                ]
            },
        },

        // Compile SASS files into minified CSS.
        sass: {
            dev: {
                options: {
                    style: 'expanded'
                },
                files: sassFiles
            },
            options: {
                includePaths: ['bower_components/bootstrap-sass-official/assets/stylesheets']
            },
            dist: {
                options: {
                    style: 'compressed'
                },
                files: sassFiles
            }
        },

        // Watch these files and notify of changes.
        watch: {
            grunt: { files: ['Gruntfile.js'] },

            sass: {
                files: [
                    'scss/**/*.scss'
                ],
                tasks: ['sass']
            }
        },

        // Minify Javascript and jQuery files
        uglify: {
            options: {
                mangle: false
            },
            my_target: {
                options: {
                    beautify: true
                },
                files: {
                    'js/app.min.js': ['scripts/**/*.js', 'scripts/*.js']
                }
            }
        }
    });

    // Load externally defined tasks. 
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    // Establish tasks we can run from the terminal.
    grunt.registerTask('build', ['build', 'copy']);
    grunt.registerTask('watch', ['watch']);
    grunt.registerTask('default', ['sass']);
}