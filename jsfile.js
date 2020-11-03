              function showPassword() {
                  var x = document.getElementById("mypsw");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                 function ValidationLoginForm() { 
                
                var email =  
                    document.forms["login_form"]["email"]; 
                
                var password =  
                    document.forms["login_form"]["psw"]; 
  
                  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if(!re.test(email.value)){
                    window.alert( 
                      "Please enter a valid e-mail address."); 
                    email.focus(); 
                    return false; 
                  }
  
                const pattern = /^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{0,}$/;
                if(!pattern.test(password.value)){
                   window.alert("Please enter a valid password"); 
                    password.focus(); 
                    return false; 
                }
                return true; 
            } 


            function ValidationSignupForm() { 
                
                var email =  
                    document.forms["sign_form"]["email"]; 
                var phone =  
                    document.forms["sign_form"]["phone"]; 
                var password =  
                    document.forms["sign_form"]["psw"]; 
                var con_password =  
                    document.forms["sign_form"]["psw_repeat"]; 
  
                  const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if(!re.test(email.value)){
                    window.alert( 
                      "Please enter a valid e-mail address."); 
                    email.focus(); 
                    return false; 
                  }
  
                const pattern = /^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{0,}$/;
                if(!pattern.test(password.value)){
                   window.alert("Please enter a valid password"); 
                    password.focus(); 
                    return false; 
                }
                if (password.value != con_password.value) { 
                    window.alert("Password and Confirm password are not same"); 
                    con_password.focus(); 
                    return false; 
                } 
                const phoneRegex = /^[0-9]{10}$/
                if (!phoneRegex.test(phone.value)) { 
                    window.alert( 
                      "Please enter valid mobile number."); 
                    phone.focus(); 
                    return false; 
                } 
                return true; 
            } 

            
