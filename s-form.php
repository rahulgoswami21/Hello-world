         <div class="col-md-4 form-cont order-sm-2 order-1">
            
             
            <div class="col-md-12" style="position: sticky;top: 64px;border: 1px solid #b5b5b5;background-color: white;border-radius: 10px;box-shadow: 0px 0px 11px #b5b5b5;">    
                
                <div  style="margin-top:14px;text-align:center;">
                   <h3> Experience the Best</h3>
                <h3>MacBook Service in Delhi</h3>
                    <!--<div class="col-4 text-center">-->
                    <!--    <img class="form-img" src="https://www.lappymaker.com/images/Free-Doorstep-Service.png" alt="Free-Doorstep-Service">-->
                    <!--    <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;">Free Doorstep <br>Service</p>-->
                    <!--</div>-->
                    <!--<div class="col-4 text-center">-->
                    <!--    <img class="form-img" src="https://www.lappymaker.com/images/Assured-Warranty.png" alt="Assured-Warranty">-->
                    <!--    <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;">Assured <br>Warranty</p>-->
                    <!--</div>-->
                    <!--<div class="col-4 text-center">-->
                    <!--    <img class="form-img" src="https://www.lappymaker.com/images/No-Diagnosis-Charges.png" alt="No-Diagnosis-Charges">-->
                    <!--    <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;">No Diagnosis <br>Charges</p>-->
                    <!--</div>-->
                </div>
                
                <div class="form-fildes">
                <form id="contact-form" action="" method="POST" novalidate="novalidate">
                    <input type="hidden" name="content" id="content" class="form-control" value="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" minlength="10" maxlength="10" placeholder="Mobile No." name="phone" id="phone" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-hover color-9" id="send">REQUEST CALL BACK</button>
                    </div>
                </form>
                </div>
                <div id="loader-icon" style="display:none;" class="col-md-12 text-center">
                    <img src="https://www.lappymaker.com/images/loder.gif" style="width: 100px;">
                    <p>wait..</p>
                </div>
                <script>
                    $(document).ready(function(){
        
                    $(function () {
                        
                        $('#contact-form').submit(function (e) {
                            e.preventDefault();
                            if($(this).valid()) {
                    			$('#loader-icon').show();
                    			$('#contact-form').hide();
                    			var selectproduct = "-";
                    			var selectissue = "-";
                                var content = $('#content').val();
                                var name = $('#name').val();
                                var email = $('#email').val();
                                var phone = $('#phone').val();
                                $.ajax({
                                    url: "../contact.php",
                                    type:"POST",
                                    dataType:'type',
                                    data : {
                                        name : name,
                                        content : content,
                                        email : email,
                                        phone : phone,
                                        selectproduct : selectproduct,
                                        selectissue : selectissue,
                                    },
                                    success: function(response){
                                        $("#mail-status").show();
                        				$('#loader-icon').show();
                        				window.location='../thank-you'
                        				if(response.type == "error") {
                        					$('#send-message').show();
                        					window.location='../thank-you'
                        				} else if(response.type == "message"){
                        					$('#send-message').hide();
                        					$("#mail-status").attr("class","success");
                        					window.location='../thank-you'
                        				}
                        				$("#mail-status").html(response.text);
                                    },
                                    error: function(data){
                                        $('#contact-form').hide();
                                        $('#thankyou-msg').show();
                        				window.location='../thank-you'
                                    }
                                    
                                })
                            }
                        });
                    });
                
                });
                </script>
                <div class="row" style="margin-bottom: 5px;">
                    <div class="col-6 text-center" style="border-right: 1px solid;height: 75px;">
                        <img src="images/STAR REVIEW.png" style="width: 35px;margin-top:-14px;"><span style="font-size: 22px;font-weight: 700;">&nbsp;4.6/5</span>
                        <p style="text-align:center; font-size:14px;">Based on 420+<br> Google Reviews</p>
                    </div>
                    <div class="col-6 text-center">
                        <span style="font-size: 22px;font-weight: 700;">10,000 +</span>
                        <p style="text-align:center; font-size:14px;">Happy Customers<br> around Delhi NCR</p>
                    </div>
                </div>
            </div>    
            </div>