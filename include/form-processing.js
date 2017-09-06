jQuery( document ).ready( function () {
	jQuery( "#as_form" ).validate( {
		rules: {
			name: "required",
			username: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			},

			email: {
				required: true,
				email: true
			},
			//agree: "required"
		},
		messages: {
			firstname: "Please enter your firstname",
			lastname: "Please enter your lastname",
			username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address",
			agree: "Please accept our policy"
		},
		errorElement: "em",
			errorPlacement: function ( error, element ) {
				// Add the `help-block` class to the error element
				error.addClass( "help-block" );

				if ( element.prop( "type" ) === "checkbox" ) {
					error.insertAfter( element.parent( "label" ) );
				} else {
					error.insertAfter( element );
				}
			},
			highlight: function ( element, errorClass, validClass ) {
				$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
			},
			unhighlight: function (element, errorClass, validClass) {
			$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
		},
		submitHandler: function(form) {
		    var formData = new FormData(form);

		    jQuery.ajax({
				        	url : "include/as-gmail.php",
		                    type: "POST",
		                    data: formData,
		                    mimeType: "multipart/form-data",
			                contentType: false,
			                cache: false,
			                processData: false,
		                    success: function(data){
		                        alert("success");
		                        alert(data);
		                    },
		                    error:function(){
		                       alert("failure");
		                    }
		        //Your code for AJAX Ends
		    });
		}
	} );


} );
