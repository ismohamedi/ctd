    <?php
        include"header.php";
         ?>
        <!-- //header -->
        <!-- inner banner -->
      
        <!-- //inner banner -->
        <!-- //breadcrumbs -->
        <!-- register  -->
         <style type="text/css">
           #label{
                text-align: center;
                margin-left: 37%;
            }
            input[type=text],input[type=password],input[type=email]{
                text-align: center;
            }
        </style>
        <div class="modal-body align-w3 editContent" style="outline: none; cursor: inherit;">
            <h1 style="color:#15677A;font-weight: bold;" align="center">Register here</h1>
            <form action="reg.php" method="post" class="p-sm-3">
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-email" class="col-form-label editContent" style="outline: none; cursor: inherit;">Email</label>
                    <input type="email" class="form-control" placeholder="ctdcommunity@email.com" name="Email" id="recipient-email" required="">
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-email" class="col-form-label editContent" style="outline: none; cursor: inherit;">Role</label>
                    <select type="email" class="form-control" name="role" id="recipient-email" required=""><option>Select your role</option><option>Developer</option><option>Graphic Designer</option><option>Customer</option><option>Student/Learner</option></select>
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="password1" class="col-form-label editContent" style="outline: none; cursor: inherit;">Password</label>
                    <input type="password" class="form-control" placeholder="******" name="Password" id="password1" required="" minlength="8">
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="password2" class="col-form-label editContent" style="outline: none; cursor: inherit;">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="******" name="ConfirmPassword" id="password2" required="" minlength="8">
                </div>
                <div class="sub-w3l">
                    <div class="sub-w3layouts_hub">
                        <input type="checkbox" id="brand2" value="" required="">
                        <label  for="brand2" class="mb-3 text-secondary editContent" style="outline: none; cursor: inherit;">
                            <span></span>I Accept to the <a href="terms_n_conditions.php"> Terms &amp; Conditions</a></label>
                    </div>
                </div>
                <div class="right-w3l">
                    <button type="submit" class="form-control btn-info" style="outline: none; cursor: inherit;" name="register">Register</button>
                </div>
            </form>
        </div>
        <!-- //register -->

        <!-- footer -->
         <?php 
        include"footer.php";
        ?>


</body></html>