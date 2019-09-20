$(document).ready(function(){
          $("#signup-form").submit(function(e){
                  e.preventDefault();
                  var formData = $("#signup-form").serialize();
                  $.ajax({
                      type: "POST",
                      url: "engine/auth.php",
                      data: formData,
                      dataType   : 'json'

                  })
                .done(function(data) {
                  console.log(data);
                  if ( ! data.success) {
                    $('#name, #password, #email').removeClass('input');
                    
                    $('#name-error, #email-error, #password-error').html('');
                    if (data.errors.name) {
                      
                      $('#name').addClass('input');
                        $('#name-error').html(data.errors.name);
                    }
                    if (data.errors.email) {
                      
                      $('#email').addClass('input'); 
                        $('#email-error').html(data.errors.email);
                    }


                    if (data.errors.password) {
                      
                      $('#password').addClass('input');
                        $('#password-error').html(data.errors.password);
                    }

                  }
                  else{
                    $('#name, #password, #email').removeClass('input');
                    $('#name-error, #email-error, #password-error').html('');

                    $("#msg").fadeIn(1000, function(){                        
                    $("#msg").html('<div class="alert alert-success"> <span class="fa fa-check-circle"></span> &nbsp;'+data.message+' <a href ="login.php">click here</a> to proceed to Login.</div>');                                
                });
                  }

                    
                })
                .fail(function(data) {
                console.log(data);
              });

            
                  return false;
            });


           $("#login-form").submit(function(e){
                  e.preventDefault();
                  var formData = $("#login-form").serialize();
                  $.ajax({
                      type: "POST",
                      url: "engine/auth.php",
                      data: formData,
                      dataType   : 'json'

                  })
                .done(function(data) {
                  console.log(data);
                  if ( ! data.success) {
                      $('#login-email, #login-password').removeClass('input');
                      $('#email-err, #password-err').html('');
                      $("error").fadeOut();
                    if (data.errors.email) {
                      $('#login-email').addClass('input'); 
                      $('#email-err').html(data.errors.email);
                    }
                    if (data.errors.password) {
                      $('#login-password').addClass('input'); 
                      $('#password-err').html(data.errors.password);
                    }
                    if (data.errors.login) {
                      $('#login-password, #login-email').addClass('input');
                      $("#error").fadeIn(1000, function(){                        
                          $("#error").html('<div class="alert alert-danger"><span class="fa fa-times-circle"></span> '+data.errors.login+'</div>');                                
                      });
                    }

                  }
                  else{
                    $("error").fadeOut();
                    if (data.message = "logged-in") {
                      $('#login-btn').html('<span><i class="fa fa-spinner"></i> Signing in</span>')
                      setTimeout(function(){
                        location.assign("welcome.php");
                      },1000);
                      
                    }
                  }   
                })
                .fail(function(data) {
                console.log(data);
            });

            
                  return false;
              });
      });