    <?php
        include"header.php";
        include '../database/ctdconnect.php';
         ?>
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
            <h6 style="color:#15677A;font-weight: bold;" align="center">Fill the details bellow as a Developers-Programmer, Graphic Designer</h6>
            <form action="reg_dev_action.php" method="post" class="p-sm-3" enctype="multipart/form-data">
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-name" class="col-form-label editContent" style="outline: none; cursor: inherit;">First Name</label>
                    <input type="text" class="form-control" placeholder="your name" name="first_name" id="recipient-name" required="">
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-email" class="col-form-label editContent" style="outline: none; cursor: inherit;">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Last Name" name="last_name" id="recipient-name" required="">
                </div>
                 <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-email" class="col-form-label editContent" style="outline: none; cursor: inherit;">Gender</label>
                    <select class="form-control" name="gender"><option>select gender</option> <option>MALE</option> <option>FEMALE</option></select>
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-email" class="col-form-label editContent" style="outline: none; cursor: inherit;">phone Number</label>
                    <input type="string" class="form-control" placeholder="Ex: +255XXXXXXXX" name="phone" id="recipient-number" required="">
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="recipient-email" class="col-form-label editContent" style="outline: none; cursor: inherit;">Country</label>
                    <select  class="form-control" name="country" id="recipient-country" required=""><option>select your country</option>
                        <?php
                        $select_country  = "SELECT `country_name` FROM `apps_countries`";

                        $passquery       = mysqli_query($connection,$select_country);

                       while($countries  = mysqli_fetch_array($passquery)){

                        echo'<option> '.$countries['country_name'].'</option>';
                        }
                    
                    ?>

                    </select>
                </div>
                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                    <label id="label" for="password1" class="col-form-label editContent" style="outline: none; cursor: inherit;"><span class="fa fa-cloud-upload"></span> Upload CV/resume</label>
                    <label style="color: red;cursor: pointer;" onclick="resume()">  why CV/resume?</label>
                    <input type="file" class="form-control"  name="resume" id="file" required=""  accept="application/pdf">
                </div>
            
                <div class="right-w3l">
                    <button type="submit" class="form-control btn-info" style="outline: none; cursor: inherit;" name="save">submit</button>
                </div>
            </form>
        </div>
        <!-- //register -->

        <!-- footer -->
         <?php 
        include"footer.php";
        ?>

        <script type="text/javascript">
            function resume(){
                alert('We need you to upload your resume or CV so as to make easier on provision of notifications of available Jobs according to your skills and experience but also we need you to add on your profile Programming languages which you use. Congratulation for Joining the Community');
            }
        </script>


</body></html>