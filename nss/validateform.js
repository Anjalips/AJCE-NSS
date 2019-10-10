function validateform(){

$("#namerr").hide();
	$("#adnorr").hide();
	$("#classrr").hide();
	$("#yearerr").hide();
	$("#addressrr").hide();
	$("#experiencerr").hide();
	$("#emailidrr").hide();
	$("#phonerr").hide();
	$("#dobrr").hide();
	$("#genderrr").hide();
	$("#blooodgrouprr").hide();
	$("#passworderr").hide();
	$("#cperr").hide();

	var errmsg_name = false;
	var errmsg_adno = false;
	var errmsg_class = false;
	var errmsg_year = false;
	var errmsg_address = false;
	var errmsg_exp = false;
	var errmsg_email = false;
	var errmsg_phone = false;
	var errmsg_dob = false;
	var errmsg_gender = false;
	var errmsg_bloodgroup = false;
	var errmsg_password = false;
	var errmsg_cpsw = false;

	$("#name").focusout(function() {
		check_name();
	});

	$("#name").focusin(function() {
		check_focusname();
	});

	$("#name").keypress(function() {
		check_keyname();
	});
	$("#adno").focusout(function() {
		check_ad();
	});

	$("#adno").focusin(function() {
		check_adn();
	});

	$("#adno").keypress(function() {
		check_adno();
	});
	$("#class").focusout(function() {
		check_class();
	});

	$("#class").focusin(function() {
		check_focusclass();
	});

	$("#class").keypress(function() {
		check_keyclass();
	});
	$("#year").focusout(function() {
		check_year();
	});

	$("#year").focusin(function() {
		check_focusyear();
	});

	$("#year").keypress(function() {
		check_keyyear();
	});

	$("#address").focusout(function() {
		check_addr();
	});

    $("#address").focusin(function() {
    	check_addre();
    });
	
    $("#address").keypress(function() {
    	check_addres();
    });

	$("#experience").focusout(function() {
		check_exp();
	});

    $("#experience").focusin(function() {
    	check_expf();
    });

	$("#experience").keypress(function() {
		check_expc();
	});
	$("#emailid").focusout(function(){
		check_emailid();
	});

	$("#emailid").focusin(function(){
		check_mailidf();
	});

	$("#emailid").keypress(function(){
		check_email();
	});
	
	$("#phone").focusout(function(){
		check_ph();
	});

    $("#phone").focusin(function(){
    	check_phn();
    });

	$("#phone").keypress(function(){
		check_phno();
	});
	$("#dob").focusout(function() {
		check_dob();
	});

	$("#dob").focusin(function(){
		check_doob();
	});
	$("#gender").focusin(function(){
		check_gend();
	});

	$("#bloodgoup").focusout(function() {
		check_bg();
	});

	$("#bloodgoup").focusin(function() {
		check_bgf();
	});

	$("#bloodgoup").keypress(function() {
		check_bgroup();
	});


	$("#password").focusout(function(){
		check_psw();
	});

	$("#password").focusin(function(){
		check_pswd();
	});

	$("#password").keypress(function(){
		check_pass();
	});

	$("#cp").focusout(function(){
		check_cps();
	});

	$("#cp").focusin(function(){
		check_cpsw();
	});

    $("#cp").keypress(function(){
    	check_cpswd();
    });

 /*$("#myformform").submit(function() {
    
    var errmsg_name = false;
	var errmsg_adno = false;
	var errmsg_class = false;
	var errmsg_year = false;
	var errmsg_address = false;
	var errmsg_exp = false;
	var errmsg_email = false;
	var errmsg_phone = false;
	var errmsg_dob = false;
	var errmsg_gender = false;
	var errmsg_bloodgroup = false;
	var errmsg_password = false;
	var errmsg_cpsw = false;
	
	
	check_name();
	check_focusname();
	check_keyname();
	check_ad();
	check_adn();
	check_adno();
	check_class();
	check_focusclass();
	check_keyclass();
	check_year();
	check_focusyear();
	check_keyyear();
	check_addr();
	check_addre();
	check_addres();
	check_exp();
	check_expf();
	check_expc();
	check_emailid();
	check_mailidf();
	check_email();
	check_ph();
	check_phn();
	check_phno();
	check_dob();
	check_doob();
	check_gend();
	check_bg();
	check_bgroup();
	check_b();
	
	check_psw();
	check_pswd();
	check_pass();
	check_cps();
	check_cpsw();
	check_cpswd();

    if(errmsg_cpsw==false && errmsg_password==false && errmsg_bloodgroup==false && errmsg_gender==false && errmsg_dob==false && errmsg_phone==false
    	&& errmsg_email==false && errmsg_exp==false && errmsg_address==false && errmsg_year==false && errmsg_class==false && errmsg_adno==false && errmsg_name==false) {
    	return true;
    }
    else {
    	return false;
    }
});*/

    function check_name()
	 {
		var name_len = $("#name").val().length;
		if(name_len == 0) {
			$("#namerr").html("Required");
			$("#namerr").show();
			errmsg_name = true;
		}
		else {
			$("#namerr").hide();
		}
	}

	function check_focusname() {
		var name_len = $("#name").val().length;
		if(name_len == 0) {
			$("#namerr").html("Required");
			$("#namerr").show();
			errmsg_name = true;
		}
		else {
			$("#namerr").hide();
		}
	}

    function check_keyname() {
		var name_len = $("#name").val().length;
		if(name_len < 3) {
			$("#namerr").html("Should contain more than 3 characters");
			$("#namerr").show();
			errmsg_name = true;
		}
		else {
			$("#namerr").hide();
		}
		var pattern = /^[a-zA-Z\s]+$/;
		var na = $("#name").val();
		if(pattern.test(na)) {
			$("#namerr").hide();
		}
		else {
			$("#namerr").html("Characters only");
			$("#namerr").show();
			errmsg_name = true;
		}
	}
	    
	function check_ad() {
		var ad_len = $("#adno").val().length;
		if(ad_len == 0) {
			$("#adnorr").html("Required");
			$("#adnorr").show();
			errmsg_adno = true;
		}
		else {
			$("#adnorr").hide();
		}
	}

	function check_adn() {
		var ad_len = $("#adno").val().length;
		if(ad_len == 0) {
			$("#adnorr").html("Required");
			$("#adnorr").show();
			errmsg_adno = true;
		}
		else {
			$("#adno").hide();
		}
	}

	function check_adno() {
		var pattern = /^[0-9]+$/;
		var ad = $("#adno").val();
		if(pattern.test(ad)) {
			$("#adnorr").hide();
		}
		else {
			$("#adnorr").html("Numbers only");
			$("#adnorr").show();
			errmsg_adno = true;
		}
	}
function check_class()
	 {
		var name_len = $("#class").val().length;
		if(name_len == 0) {
			$("#classrr").html("Required");
			$("#classrr").show();
			errmsg_name = true;
		}
		else {
			$("#classrr").hide();
		}
	}

	function check_focusclass() {
		var name_len = $("#class").val().length;
		if(name_len == 0) {
			$("#classrr").html("Required");
			$("#classrr").show();
			errmsg_class = true;
		}
		else {
			$("#classrr").hide();
		}
	}

    function check_keyclass() {
		var name_len = $("#class").val().length;
		if(name_len < 3) {
			$("#classrr").html("Should contain more than 3 characters");
			$("#classrr").show();
			errmsg_class = true;
		}
		else {
			$("#classrr").hide();
		}
		var pattern = /^[a-zA-Z\s]+$/;
		var za = $("#class").val();
		if(pattern.test(za)) {
			$("#classrr").hide();
		}
		else {
			$("#classrr").html("Characters only");
			$("#classrr").show();
			errmsg_class = true;
		}
	}
	function check_year() {
		var pi_len = $("#year").val().length;
		if(pi_len == 0) {
			$("#yearerr").html("Required");
			$("#yearerr").show();
			errmsg_year = true;
		}
		else {
			$("#yearerr").hide();
		}
	}

	function check_focusyear() {
		var pi_len = $("#year").val().length;
		if(pi_len == 0) {
			$("#yearerr").html("Required");
			$("#yearerr").show();
			errmsg_year = true;
		}
		else {
			$("#yearerr").hide();
		}
	}

	function check_keyyear() {
		var pattern = /^[0-9]+$/;
		var pi = $("#year").val();
		if(pattern.test(pi)) {
			$("#yearerr").hide();
		}
		else {
			$("#yearerr").html("Numbers only");
			$("#yearerr").show();
			errmsg_year = true;
		}
	}

	function check_addr() {
		var addr_len = $("#address").val().length;
		if(addr_len == 0) {
			$("#adderr").html("Required");
			$("#adderr").show();
			errmsg_addr = true;
		}
		else {
			$("#adderr").hide();
		}
	}

	function check_addres() {
		var pattern = /^[0-9a-zA-Z]+$/;
		var address = $("#address").val();
		if(pattern.test(address)) {
			$("#adderr").hide();
		}
		else {
			$("#adderr").html("No special characters allowed");
			$("#adderr").show();
			errmsg_addr = true;
		}
	}

	function check_addre() {
		var addr_len = $("#address").val().length;
		if(addr_len == 0) {
			$("#adderr").html("Required");
			$("#adderr").show();
			errmsg_addr = true;
		}
		else {
			$("#adderr").hide();
		}
	}
function check_exp() {
		var exp_len = $("#experience").val().length;
		if(exp_len == 0) {
			$("#experiencerr").html("Required");
			$("#experiencerr").show();
			errmsg_email = true;
		}
		else {
			$("#experiencerr").hide();
		}
	}

	function check_expf() {
		var exp_len = $("#experience").val().length;
		if(exp_len == 0) {
			$("#experiencerr").html("Required");
			$("#experiencerr").show();
			errmsg_exp = true;
		}
		else {
			$("#experiencerr").hide();
		}
	}

	function check_expc() {
		var pattern = /^[0-9]+$/;
		var ap = $("#experience").val();
		if(pattern.test(ap)) {
			$("#experiencerr").hide();
		}
		else {
			$("#experiencerr").html("Numbers only");
			$("#experiencerr").show();
			errmsg_exp = true;
		}
	}
	function check_emailid() {
		var mail_len = $("#emailid").val().length;
		if(mail_len == 0) {
			$("#emailidrr").html("Required");
			$("#emailidrr").show();
			errmsg_email = true;
		}
		else {
			$("#emailidrr").hide();
		}
	}

	function check_mailidf() {
		var mail_len = $("#emailid").val().length;
		if(mail_len == 0) {
			$("#emailidrr").html("Required");
			$("#emailidrr").show();
			errmsg_email = true;
		}
		else {
			$("#emailidrr").hide();
		}
	}

    function check_email() {
		var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var mail = $("#emailid").val();
		if(pattern.test(mail)) {
			$("#emailidrr").hide();
		}
		else {
			$("#emailidrr").html("Invalid Email Id");
			$("#emailidrr").show();
			errmsg_email = true;
		}
	}

	
	function check_ph() {
		var ph_len = $("#phone").val().length;
		if(ph_len != 10) {
			$("#phonerr").html("Invalid phone number");
			$("#phonerr").show();
			errmsg_phone = true;
		}
		else {
			$("#pherr").hide();
		}
	}

    function check_phn() {
		var p_len = $("#phone").val().length;
		if(p_len != 10) {
			$("#phonerr").html("Invalid phone number");
			$("#phonerr").show();
			errmsg_phone = true;
		}
		else {
			$("#phonerr").hide();
		}
	}

	function check_phno() {
		var pattern = /^[0-9]+$/;
		var p = $("#phone").val();
		if(pattern.test(p)) {
			$("#phonerr").hide();
		}
		else {
			$("#phonerr").html("Numbers only");
			$("#phonerr").show();
			errmsg_phone = true;
		}
	}

	
	function check_dob() {
        var st = $("#dob").val();
		if(st == 0) {
			$("#dobrr").html("Required");
			$("#dobrr").show();
			errmsg_dob = true;
		}
		else {
			$("#dobrr").hide();
		}
	}

	function check_doob() {
        var st = $("#dob").val();
		if(st == 0) {
			$("#dobrr").html("Required");
			$("#dobrr").show();
			errmsg_dob= true;
		}
		else {
			$("#dobrr").hide();
		}
	}

	function check_gen() {
		var ge_len  = $("#gender").checked.length; 
		if(ge_len == 0) {
			$("#genderrr").html("Required");
			$("#genderrr").show();
			errmsg_gend = true;
		}
		else {
			$("#generr").hide();
		}
	}

	function check_gend() {
		var ge_len  = $("#gender").checked.length;
		if(ge_len == 0) {
			$("#genderrr").html("Required");
			$("#genderrr").show();
			errmsg_gend = true;
		}
		else {
			$("#genderrr").hide();
		}
	}

	
	
	
	function check_psw() {
		var psw_len = $("#password").val().length;
		if(psw_len == 0) {
			$("#passworderr").html("Required");
			$("#passworderr").show();
			errmsg_password = true;
		}
		else {
			$("#passworderrerr").hide();
		}
	}

	function check_pswd() {
		var psw_len = $("#password").val().length;
		if(psw_len == 0) {
			$("#passworderr").html("Required");
			$("#passworderr").show();
			errmsg_password = true;
		}
		else {
			$("#pswerr").hide();
		}
	}

	function check_password() {
		var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})$/;
		var pass = $("#password").val();
		if(pattern.test(pass)) {
			$("#passworderr").hide();
		}
		else {
			var psw_len = $("#password").val().length;
			if(psw_len<8) {
				$("#passworderr").html("Must contain atleast 8 characters(Combination of capital letters, small letters, numbers and symbols)");
			    $("#passworderr").show();
			    errmsg_password = true;
			}
			else if(psw_len==8 && psw_len<12) {
				$("#passworderr").html("Weak password");
			    $("#passworderr").show();
			    errmsg_password= true;
			}
			else if(psw_len==12 && psw_len<16) {
				$("#passworderr").html("Medium password");
			    $("#passworderr").show();
			    errmsg_password = true;
			}
			else {
				$("#passworderr").html("Strong password");
			    $("#passworderr").show();
			    errmsg_password = true;
			}
		}
	}

	function check_cps() {
		var psw_len = $("#cp").val().length;
		if(psw_len == 0) {
			$("#cperr").html("Required");
			$("#cperr").show();
			errmsg_cpsw = true;
		}
		else {
			$("#cperr").hide();
		}
	}

	function check_cpsw() {
		var psw_len = $("#cp").val().length;
		if(psw_len == 0) {
			$("#cpswerr").html("Required");
			$("#cpswerr").show();
			errmsg_cpsw = true;
		}
		else {
			$("#cperr").hide();
		}
	}

    function check_cpswd() {
    	var pswd = $("#cp").val();
    	var cpswd = $("#cp").val();
    	if(pswd != cpswd) {
    		$("#cperr").html("Passwords doesn't match");
			$("#cperr").show();
			errmsg_cpsw = true;
    	}
    	else {
			$("#cperr").hide();
		}
    }
}

});