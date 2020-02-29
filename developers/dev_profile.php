     <?php
    session_start();
    if(!$_SESSION['email']){
        echo'<script>window.location.assign("../login.php")</script>';
    }
        include"header.php";
        include '../database/ctdconnect.php';
         ?>
      
          <!-- style for forum chat area -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <style type="text/css">
            .post-wthree h1,h2,h3,h4,h5,h6{
                color:#15677A;
            }
        </style>
        <section class="post-wthree align-w3 editContent" id="blog" style="outline: none; cursor: inherit;">
            <div class="container">
                <div class="row">
                    <!-- right side -->
                 <!--    for category list-->
                 <?php include 'categories.php'; ?>

                    <!-- //right side -->

                    <div class="col-lg-8 single-left mt=lg=0 mt-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="single-left1">
                <div class="contact-form editContent" style="outline: none; cursor: inherit;margin-top: -50px;">
                    <h4 align="center" style="color:#15677A;"><span class="fa fa-briefcase"></span> my profile</h4>



                                <?php
                                ///////////////////////////// TAKING DEVELOPERS DETAILS FROM THE DATABASE////////////////////////////////////////////////////////
                                $user_email   = $_SESSION['email'];
                                $dev_details  = mysqli_query($connection,"SELECT * FROM `developers_accounts`,`apps_countries`,`users` WHERE developers_accounts.country = apps_countries.id AND developers_accounts.user_id = users.id AND developers_accounts.email = '$user_email'");
                                $dev_data     = mysqli_fetch_array($dev_details);

                                 ?>
                            
                                <div class="contact-form-wthreelayouts editContent" style="outline: none; cursor: inherit;">
                                    <img src="<?php echo'../profile_photos/'.$dev_data['photo'].'' ?>" style="border-radius: 360px; height: 80px; width:80px; margin-left: 46%">
                                    <h6  class="editContent" style="outline: none; cursor: inherit;color:#15677A;" align="center">
                                        personal Details
                                    </h6>


                                    <!-- list of personal details -->
                                    <label style="font-weight: bold; width: 150px;">First-name:</label> <?php echo $dev_data['first_name'];  ?><br>
                                    <label style="font-weight: bold;width: 150px;">surname:</label> <?php echo $dev_data['last_name'];  ?><br>
                                    <label style="font-weight: bold;width: 150px;">Phone:</label><?php echo $dev_data['phone_number']; ?><br>
                                    <label style="font-weight: bold;width: 150px;">Email:</label><?php echo $dev_data['email']; ?><br>
                                    <label style="font-weight: bold;width: 150px;">Country:</label><?php echo $dev_data['country_name']; ?><br>
                                    <label style="font-weight: bold;width: 150px;">Role:</label><?php echo $dev_data['user_role']; ?><br>
                                    <button class="btn btn-info" style="margin-left: 35%"data-toggle="modal" data-target="#form_modal1"><span class="fa fa-refresh"></span> update</button>

                                </div>
                                <div class="contact-form-wthreelayouts editContent" style="outline: none; cursor: inherit;">
                                    <h6  class="editContent" style="outline: none; cursor: inherit;color:#15677A;" align="center">
                                        My Skills
                                    </h6><br>
                                    <?php 

                                    ////////////////////// FOR DISPLAYING SKILLS DETAILS///////////////
                                    $user_id = $dev_data['dev_id'];
                                    $skills_details = mysqli_query($connection,"SELECT DISTINCT skill_type FROM skills_category,developers_skills WHERE skills_category.skill_category_id = developers_skills.skill_category_id AND dev_id = '$user_id' ");
                                    while($skills = mysqli_fetch_array($skills_details)){
                                        $skill_type = $skills['skill_type'];

                                    ?>

                                    <label style="font-weight: bold;width: 150px;">
                                        <?php echo $skill_type; ?>:</label>

                                        <?php
                                    $dev_id        = $dev_data['dev_id'];
                                    $select_skills = mysqli_query($connection,"SELECT DISTINCT skill_title FROM `developers_skills`,`skills_category` WHERE developers_skills.skill_category_id = skills_category.skill_category_id AND dev_id = '$dev_id' AND skill_type = '$skill_type'");
                                    while($skill  = mysqli_fetch_array($select_skills)){
                                    
                                    $user_skill    = $skill['skill_title'];
                                    echo''.$user_skill .',';
                                    }

                                     ?><br>
                                 <?php } ?>
                                 <button class="btn btn-success" style="margin-left: 30%"data-toggle="modal" data-target="#form_modal4"><span class="fa fa-refresh"></span>update</button>
                                     <button class="btn btn-info" style="margin-left: 3%"data-toggle="modal" data-target="#form_modal"><span class="fa fa-plus"></span>Add skills</button>
                                </div>
                                <div class="contact-form-wthreelayouts editContent" style="outline: none; cursor: inherit;">
                                    <h6  class="editContent" style="outline: none; cursor: inherit;color:#15677A;" align="center">
                                    My CV/Resume
                                    </h6>

                                    <!-- checking if the cv/resume is empty -->
                                    <?php 

                                   if(!empty($dev_data['cv_resume'])){
                                    ?>

                                    <label>my cv/resume: </label><a href="../Dev_CV_resume/<?php echo $dev_data['cv_resume'] ?>"><?php 
                                    echo $dev_data['cv_resume']; ?></a><br>

                                <?php } else{?>
                                    <p style="color: red" align="center">Currently you have no CV/Resume please upload your CV/Resume</p><br>
                                <?php }?>
                                    <button class="btn btn-danger" style="margin-left: 30%"data-toggle="modal" data-target="#form_modal3"><span class="fa fa-minus-square"></span>delete</button>
                                    <button class="btn btn-info" style="margin-left: 2%"data-toggle="modal" data-target="#form_modal2"><span class="fa fa-refresh"></span>update</button>
                                </div>
            
                           
                        </div>
 

                    </div>


                </div>
                    
                        </div>
                        <!--  -->
                    </div>
                    <!-- //left side -->
                </div>
            </div>



           <!--  pop up for updating  user details -->

            <div class="modal fade" id="form_modal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="update_profile.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title">Update personal details</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label >First-Name</label>
                                <input type="text" name="fname" placeholder="optional" class="form-control">
                            </div>
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>Last-name</label>
                                <input type="text" name="lname" class="form-control"  placeholder="optional" />
                            </div>
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>phone</label>
                                <input type="text" name="phone" class="form-control"  placeholder="optional" />
                            </div>
                             <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>profile photo</label>
                                <input type="file" name="photo"  placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="update" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



<!-- for the popup for entering skills details -->


            <div class="modal fade" id="form_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="add_skills.php">
                    <div class="modal-header">
                        <h3 class="modal-title">Add New skill</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>Skill category:</label>
                                <select class="form-control editContent" name="skill_type" style="height: 40px">
                                    <option>select category</option>
                                    <?php
                                    $select_category = mysqli_query($connection,"SELECT DISTINCT `skill_type` FROM `skills_category`");
                                    while($category  = mysqli_fetch_array($select_category)){
                                    
                                    $available_categ = $category['skill_type'];
                                    echo'<option>'.$available_categ.'</option>';
                                    }

                                     ?>
                                    
                                </select>
                            </div>
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>skill</label>
                                <input type="text" name="skill_title" class="form-control" required="required" placeholder="Example Python" />
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




   <!--  for updating CV/resume -->
         <div class="modal fade" id="form_modal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="update_cv.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title">Upload your new CV/resume</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                             <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label><span class="fa fa-cloud-upload"></span> CV/Resume</label>
                                <input type="file" name="cv_resume"  placeholder="" accept="application/pdf" />
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="upload" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!--  for Deleting CV/resume -->
         <div class="modal fade" id="form_modal3">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="delete_cv.php" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h3 class="modal-title">Delete your CV/resume</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                             <div class="form-group editContent" style="outline: none; cursor: inherit;">
                               <label style="color: red">Do you real want to delete your CV/Resume?</label>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="upload" class="btn btn-primary"><span class="fa fa-minus"></span> Delete</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- for the popup for entering skills details -->


            <div class="modal fade" id="form_modal4">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="add_skills.php">
                    <div class="modal-header">
                        <h3 class="modal-title">Update skills</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>Skill category:</label>
                                <select class="form-control editContent" name="skill_type" style="height: 40px">
                                    <option>select category</option>
                                    <?php
                                    $select_category = mysqli_query($connection,"SELECT DISTINCT `skill_type` FROM `skills_category`");
                                    while($category  = mysqli_fetch_array($select_category)){
                                    $available_categ = $category['skill_type'];
                                    echo'<option>'.$available_categ.'</option>';
                                    }

                                     ?>
                                    
                                </select>
                            </div>
                            <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                <label>skill</label>
                                <input type="text" name="skill_title" class="form-control" required="required" placeholder="Example Python" />
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <div class="modal-footer">
                        <button name="save" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="fa fa-remove"></span> Close</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



        </section>
        <!-- //blog post -->
        <!-- footer -->
         <?php 
        include"footer.php";
        ?>


</body></html>