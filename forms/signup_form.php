<div class="header header-primary text-center">
                <h4>Student Sign Up</h4>
              </div>
              <h3 class="mt-0">Lewansys</h3>
              <p class="help-block">Enter your personal details below:</p>
              <div class="content">
                <div class="form-group">
                  <input type="text" name="student_name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <input id ="useremail" type="email" name="student_email" class="form-control underline-input" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <input id ="userpassword" type="password" name="student_password" placeholder="Password..." class="form-control" />
                </div>
                <p id="sendemaillink" onclick="sendemailverification()"  class="btn btn-primary btn-sm" >Send Verify Link to Email</button>
                <div id="mobilediv" class="form-group" style="display: none;">
                  <div class="input-group">
                    <input id= "student_mobile" type="number" name="student_mobile" placeholder="Mobile Number" class="form-control" />
                    <span class="input-group-addon"></span>
                    <p id="sendotp"  class="btn btn-primary btn-sm" >Send Otp</button>
                  </div>
                </div>
                <div id="recaptcha-container"></div>
                <div id = "verifyotpdiv" class="form-group" style="display: none;" >
                  <div class="input-group">
                    <input id="verificationcode" type="number" name="student_otp" placeholder="Enter OTP" class="form-control" />
                    <span class="input-group-addon"></span>
                    <p id="verifyotp" onclick="myFunction()" class="btn btn-primary btn-sm" >Verify</button>
                  </div>
                </div>
                
              
                <div class="checkbox">
                  <label>
                    <input type="checkbox"  checked>
                    I agree to the <a href="javascript:;">Terms of Service</a> &amp; <a href="javascript:;">Privacy Policy</a></label>
                </div>
              </div>
              <div class="footer text-center mb-20" > 
                <a href = "sjf.php">
                <button id="register"  style="display: none;" type="submit" class="btn btn-primary btn-raised" >Register <span class="glyphicon glyphicon-send"></span></button>
                </a>
              