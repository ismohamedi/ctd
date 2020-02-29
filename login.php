 <?php
        include"header.php";
         ?>
        <!-- //header -->
        <!-- inner banner -->
       
        <!-- //breadcrumbs -->
        <!-- login  -->
        <style type="text/css">
           #label{
                text-align: center;
                margin-left: 37%;
                font-size: 20px;
            }
            input[type=email],input[type=password]{
                text-align: center;
                font-size: 20px;
            }


            .field-icon {
                float: right;
                margin-left: -40px;
                margin-top: -28px;
                position: relative;
                z-index: 2;
                cursor: pointer;

  
                 }

           .container{
               padding-top:50px;
                margin: auto;
            }
            :root {
  --info-color: #0099CC;
}

.btn-toggle-pass {
  border: none;
  position: absolute;
  top: 11px;
  background: transparent;
  right: 0;
}

.btn-toggle-pass.active {
  color: var(--info-color);
}
        </style>

        <div class="modal-body align-w3 editContent" style="outline: none; cursor: inherit;">
            <h1 style="color:#15677A;font-weight: bold;" align="center">Login here</h1>
            <form action="login_action.php" method="post" class="p-sm-3">
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-name" class="col-form-label editContent" style="outline: none; cursor: inherit;">Your Email</label>
                    <input type="email" class="form-control" placeholder="Enter user email" name="Email" id="recipient-name" required="">
                </div>
            <div class="form-group">
    <label for="user_password" style="margin-left: 36%">Password:</label>
    <div class="input-group">
  <input type="password" name="Password" id="user_password" class="form-control" data-toggle="password">
  <div class="input-group-append">
    <span class="input-group-text"><i class="fa fa-eye"></i></span>
  </div>
</div>


                </div>
                <br>
                <div class="right-w3l editContent" style="outline: none; cursor: inherit;">
                    <button type="submit" class="form-control btn-info" style="outline: none; cursor: inherit; font-weight: bold;" name="login">Login</button>
                </div>
                <div class="row sub-w3l my-3">
                    <div class="col-sm-6 sub-w3layouts_hub">
                        <input type="checkbox" id="brand1" value="" name="remember">
                        <label for="brand1" class="text-secondary editContent" style="outline: none; cursor: inherit;">
                            <span></span>Remember me?</label>
                    </div>
                    <div class="col-sm-6 forgot-w3l text-sm-right">
                        <a href="#" class="text-secondary editContent" style="outline: none; cursor: inherit;">Forgot Password?</a>
                    </div>
                </div>
                <p class="editContent text-center dont-do text-secondary" style="outline: none; cursor: inherit;">Don't have an account?
                    <a href="register.php" class="text-theme-2 font-weight-bold editContent" style="outline: none; cursor: inherit;color: blue">
                        Register Now</a>
                </p>
            </form>
        </div>
        <!-- //login -->

        <!-- footer -->
         <?php 
        include"footer.php";
        ?>





</body>

        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

        </script>
</html>
