/*
 Template Name: Amezia - Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Treeview
 */



$(function () {
	"use strict";

	// Default
	$('#jstree').jstree({
        'core': {
            'check_callback': true,
            'multiple': false,
        }
    });

	//Check Box
	$('#jstree-checkbox').jstree({
		"checkbox" : {
			"keep_selected_style" : false
		  },
		  "plugins" : [ "checkbox" ],
        'core': {
            'check_callback': true,
        }
	});
});
