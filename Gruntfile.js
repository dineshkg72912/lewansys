module.exports = function(grunt) {
    grunt.initConfig({
		sass: {
			options: {
                includePaths: ['node_modules/bootstrap-sass/assets/stylesheets']
            },
            dist: {
				options: {
					outputStyle: 'compressed'
				},
                files: [{
					expand: true,
					cwd: 'assets/sass', /*root folder for styles*/
					src: 'main.scss', /* file path which have to be converted into css after the root folder*/
					dest: 'assets/css/',/* css file path where the converted files have to be placed*/
					ext: '.css' /*file extention for converted files*/
				}]
            }
        },
        
        uglify: {
          my_target: {
            files: {
               'Assets/bundles/libscripts.bundle.js': ['assets/js/jquery-2.x-git.js','assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js','assets/js/vendor/bootstrap/bootstrap.min.js','assets/js/material.min.js'], /* main js*/
               
               'Assets/bundles/vendorscripts.bundle.js': ['assets/js/vendor/jRespond/jRespond.min.js','assets/js/vendor/slimscroll/jquery.slimscroll.min.js','assets/js/vendor/animsition/js/jquery.animsition.min.js'/*,'assets/js/vendor/screenfull/screenfull.min.js'*/], /* coman js*/
               
               'Assets/bundles/flotscripts.bundle.js': ['assets/js/vendor/flot/jquery.flot.min.js','assets/js/vendor/flot/jquery.flot.resize.min.js','assets/js/vendor/flot/jquery.flot.orderBars.js','assets/js/vendor/flot/jquery.flot.stack.min.js','assets/js/vendor/flot/jquery.flot.pie.min.js', 'assets/js/vendor/flot-spline/jquery.flot.spline.min.js','assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js'], /* flot chart js */
               
               'Assets/bundles/fullcalendarscripts.bundle.js': ['assets/js/vendor/fullcalendar/lib/moment.min.js','assets/js/vendor/fullcalendar/lib/jquery-ui.custom.min.js','assets/js/vendor/fullcalendar/fullcalendar.min.js'],   /* calender page js */
               
               'Assets/bundles/bootstrapscripts.bundle.js': ['assets/js/vendor/slider/bootstrap-slider.min.js','assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js','assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js', 'assets/js/vendor/filestyle/bootstrap-filestyle.min.js'],   /* bootstrap plugin scripts */
			   
			   
               'Assets/bundles/fileuploadscripts.bundle.js': ['assets/js/vendor/file-upload/js/jquery.iframe-transport.js','assets/js/vendor/file-upload/js/jquery.fileupload.js','assets/js/vendor/file-upload/js/jquery.fileupload-process.js', 'assets/js/vendor/file-upload/js/jquery.fileupload-image.js', 'assets/js/vendor/file-upload/js/jquery.fileupload-audio.js', 'assets/js/vendor/file-upload/js/jquery.fileupload-video.js', 'assets/js/vendor/file-upload/js/jquery.fileupload-validate.js', 'assets/js/vendor/file-upload/js/jquery.fileupload-ui.js'],   /* File upload scripts */
			   
			   'Assets/bundles/sweetalertscripts.bundle.js': ['assets/js/vendor/sweetalert/sweetalert2.js','assets/js/vendor/sweetalert/sweetalert2.min.js'],   /* Sweet Alert popup msg scripts */
			   
               'Assets/bundles/coolclockscripts.bundle.js': ['assets/js/vendor/coolclock/coolclock.js','assets/js/vendor/coolclock/excanvas.js'],   /* cool clock scripts */
               
			   'Assets/bundles/datatablesscripts.bundle.js': ['assets/js/vendor/datatables/js/jquery.dataTables.min.js','assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js', 'assets/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js', 'assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js', 'assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js', 'assets/js/vendor/datatables/extensions/dataTables.bootstrap.js'],   /* data table scripts */
			   
			   'Assets/bundles/vactormapscripts.bundle.js': ['assets/js/vendor/jqvmap/jquery.vmap.min.js','assets/js/vendor/jqvmap/maps/jquery.vmap.world.js','assets/js/vendor/jqvmap/maps/jquery.vmap.usa.js','assets/js/vendor/jqvmap/maps/jquery.vmap.europe.js','assets/js/vendor/jqvmap/maps/continents/jquery.vmap.asia.js','assets/js/vendor/jqvmap/maps/continents/jquery.vmap.australia.js','assets/js/vendor/jqvmap/data/jquery.vmap.sampledata.js'],   /* Vactor Map scripts */
               
               
                           
              }
            }
        }
    });
    grunt.loadNpmTasks("grunt-sass");
    grunt.loadNpmTasks('grunt-contrib-uglify');
    
    grunt.registerTask("buildcss", ["sass"]);
    grunt.registerTask("buildjs", ["uglify"]);
};