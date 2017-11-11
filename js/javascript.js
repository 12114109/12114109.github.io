
    function ChooseForm()
    {
        selectedOption = document.getElementById("type_register").value;

        if(selectedOption == 'attendant')
        {
        	document.getElementById("regular_user_data").style.display="block";
        	document.getElementById("instructor_user_data").style.display="none";
        	document.getElementById("company_user_data").style.display="none";
        }
        if(selectedOption=='instructor')
        {
        	document.getElementById("regular_user_data").style.display="none";
        	document.getElementById("instructor_user_data").style.display="block";
        	document.getElementById("company_user_data").style.display="none";
        }
        if(selectedOption=='company')
        {
        	document.getElementById("regular_user_data").style.display="none";
        	document.getElementById("instructor_user_data").style.display="none";
        	document.getElementById("company_user_data").style.display="block";
        }
        else
        {
			document.getElementById("regular_user_data").style.display="none";
        	document.getElementById("instructor_user_data").style.display="none";
        	document.getElementById("company_user_data").style.display="none";
        }

	}




