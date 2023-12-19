const sass = require('sass');

module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        browserSync: {
            dev: {
                bsFiles: {
                    src: ['style.css', 'js/script.js', '*.php', '**/*.php']
                },
                options: {
                    watchTask: true,
                    notify: false,
                    proxy: "localhost:8000"
                }
            }
        },
        watch: {
            scss: {
                files: ['build/scss/*.scss', '!build/scss/style.scss'],
                tasks: ['build-css'],
            },
            js: {
                files: ['build/js/*.js'],
                tasks: ['build-js'],
            },
            options: {
                interrupt: true
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'expanded',
                    implementation: sass,
                    sourceMap: true
                },
                files: {
                    'build/css/style.css': 'build/scss/style.scss'
                }
            }
        },
        // Copy library from nodes_modules
        copy: {
            main: {
                files: [
                    // includes files within path and its sub-directories
                    {
                        expand: true,
                        flatten: true,
                        src: [
                            'node_modules/tiny-slider/dist/min/tiny-slider.js',
                            'node_modules/@studio-freight/lenis/bundled/lenis.js',
                            'node_modules/gsap/dist/gsap.min.js',
                            'node_modules/tiny-slider/src/tiny-slider.scss',
                            'node_modules/@waaark/luge/dist/js/luge.js',
                            'node_modules/@waaark/luge/dist/css/luge.css'

                        ],
                        dest: 'build/libs/'
                    }
                ],
            },
        },

        // concat js and css
        concat: {
            js: {
                src: ['build/libs/tiny-slider.js', 'build/libs/lenis.js','build/libs/luge.js', 'build/libs/gsap.min.js', 'build/js/*.js'],
                dest: 'js/script.js'
            },
            css: {
                src: ['build/css/config-theme.css', 'build/css/*.css'],
                dest: 'style.css'
            },

            sass: {
                src: ['build/scss/_global.scss', 'build/libs/tiny-slider.scss', 'build/scss/*.scss', '!build/scss/style.scss', '!build/scss/variables.scss'],
                dest: 'build/scss/style.scss'
            },
        },

        // minify js
        uglify: {
            my_target: {
                files: {
                    'js/script.min.js': ['js/script.js']
                }
            }
        },
        //minify css

        cssmin: {
            target: {
                files: {
                    'style.min.css': ['build/concat.css']
                }
            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['browserSync', 'watch']);

    grunt.registerTask('build-css', ['copy', 'concat:sass', 'sass', 'concat:css']);
    grunt.registerTask('build-js', ['copy', 'concat:js']);

    grunt.registerTask('deploy', ['cssmin', 'uglify']);


}