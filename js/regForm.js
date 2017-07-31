var message=["Enter your first Name","Enter your Last Name","Enter medical record number","Enter your Address such as city-street name,building no.","Enter your mobile number eg.966 5** ** ****",
"Enter your email address","Enter your password - mustbe at least 6 digits letters and numbers","Retype the same password you entered","Enter your birthday",""]
		function noteText( messageIndex ) 
         {
            document.getElementById( "help" ).innerHTML =
                "help: "+message[ messageIndex ];
         } 