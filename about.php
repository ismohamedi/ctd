    <?php
    session_start();
    if ($_SESSION['email']) {
        include"header2.php";
    }
    else{
        include"header.php";
        }
         ?>
        <!-- //header -->
        <!-- inner banner -->
        <!-- //breadcrumbs -->
        <!-- about-->
        <section class="single_grid_w3_main align-w3 editContent" style="outline: none; cursor: inherit;">
            <div class="container">
                <div class="row pt-lg-4">
                    <div class="col-lg-5 editContent mt-4" style="outline: none; cursor: inherit;">
                        <div class="wthree_pvt_title mb-3 editContent" style="outline: none; cursor: inherit;">
                            <h4 class="editContent w3pvt-title" style="outline: none; cursor: inherit; font-size: 1.3em;color:#15677A;">about CodeTechDevelopers Community
                            </h4>
                            <span class="sub-title editContent" style="outline: none; cursor: inherit;">CodeTechDevelopers Community for the modern world of automation</span>
                        </div>
                        <div class="single_grid_text pt-lg-3">
                            <p class="editContent" style="outline: none; cursor: inherit;">This was created for intension of bring together Developers with different skills so as to work together remotely so as to solve cost and time on software development.</p>
                            <p class="editContent my-2" style="outline: none; cursor: inherit;">In addition was created to make easier for the companies or small firms or individuals to to solve their problems by creating softwares of high quality in short period of time with affordable price.</p>
                            <p class="editContent" style="outline: none; cursor: inherit;">More over was created to making students or learners in different fields such as Engineering, Management, Accountants and Programming to learn differents skills from the variet of Online Courses which offering by our professional Trainers around the world who form the community. </p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="slide-img bg bg1 mt-4" style="outline: none; cursor: inherit;">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //about -->
        <!-- about-->
        <section class="single_grid_w3_main align-w3 editContent" style="outline: none; cursor: inherit;">
            <div class="container" id="service">
                <div class="wthree_pvt_title text-center editContent" style="outline: none; cursor: inherit;" >
                    <h4 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A;">Superior Services</h4>
                    <p class="editContent sub-title" style="outline: none; cursor: inherit;">CodeTechDevelopers Community as problems solvers we offer the following servicees.</p>
                </div>
                <div class="row mt-4 editContent" style="outline: none; cursor: inherit;">
                    <div class="col-lg-4 mb-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-ravelry" style="outline: none; cursor: inherit;"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt editContent" style="outline: none; cursor: inherit;">
                                        <h4 class="editContent" style="outline: none; cursor: inherit;">For Customers</h4>
                                        <p class="editContent" style="outline: none; cursor: inherit;">Software Development for affordable price and for short period of time.</p><br>
                                        <a href="contact.php"><button class="btn btn-info">Contact us now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-pencil" style="outline: none; cursor: inherit;"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt editContent" style="outline: none; cursor: inherit;">
                                        <h4 class="editContent" style="outline: none; cursor: inherit;">For Students/Learners</h4>
                                        <p class="editContent" style="outline: none; cursor: inherit;">Here we offer various Courses free, of varies fields our intension is to create high skilled Generation, problem solvers.</p><br>
                                        <a href="courses.php"><button class="btn btn-info">Learn now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-laptop" style="outline: none; cursor: inherit;"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt editContent" style="outline: none; cursor: inherit;">
                                        <h4 class="editContent" style="outline: none; cursor: inherit;">For Developers</h4>
                                        <p class="editContent" style="outline: none; cursor: inherit;">Here is where you can work remotely with other developers in a given work with good and timely payment.</p><br>
                                        <a href="register.php"><button class="btn btn-info">Join now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </section>
        <!-- //about -->
        <!-- team -->
        <section class="w3layouts_hubits-services align-w3 editContent" id="team" style="outline: none; cursor: inherit;">
            <div class="container">
                <div class="wthree_pvt_title text-center editContent" style="outline: none; cursor: inherit;">
                    <h4 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A;">our experts
                    </h4>
                    <p class="editContent sub-title" style="outline: none; cursor: inherit;">Here bellow is a list of some of our Experts in software Development and Training:</p>
                </div>
                <div class="row mt-4 team-grid editContent" style="outline: none; cursor: inherit;">
                    <div class="col-md-4 col-sm-6 editContent mt-4" style="outline: none; cursor: inherit;">
                        <div class="box13">
                            <img src="bundles/images/t1.png" class="img-fluid" alt="" style="outline: none; cursor: inherit;height: 250px; width: 250px; border-radius: 360px" >
                            <div class="box-content editContent" style="outline: none; cursor: inherit; color:black">
                                <h3 class="editContent title" style="outline: none; cursor: inherit;color:black"><?php echo"Ismaili Mohamedi" ?></h3>
                                <span class="post editContent" style="outline: none; cursor: inherit;color:black">CEO of CodeTechDevelopers Community also software Developer and Trainer.</span>
                                <ul class="social">
                                    <li><a href="#" class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a></li>
                                    <li><a href="#" class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-twitter" style="outline: none; cursor: inherit;"></span></a></li>
                                </ul>
                            </div>
                            <h3 class="editContent title" style="outline: none; cursor: inherit;color:black"><?php echo"Ismaili Mohamedi" ?></h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 editContent mt-4" style="outline: none; cursor: inherit;">
                        <div class="box13">
                            <img src="bundles/images/t2.jpg" class="img-fluid" alt="" style="outline: none; cursor: inherit;250px; width: 250px; border-radius: 360px">
                            <div class="box-content editContent" style="outline: none; cursor: inherit;">
                                <h3 class="editContent title" style="outline: none; cursor: inherit;">Grace Kaondo</h3>
                                <span class="post editContent" style="outline: none; cursor: inherit;">role in detail</span>
                                <ul class="social">
                                    <li><a href="#" class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a></li>
                                    <li><a href="#" class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-twitter" style="outline: none; cursor: inherit;"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 editContent mt-4" style="outline: none; cursor: inherit;">
                        <div class="box13">
                            <img src="bundles/images/t3.jpg" class="img-fluid" alt="" style="outline: none; cursor: inherit;250px; width: 250px; border-radius: 360px">
                            <div class="box-content editContent" style="outline: none; cursor: inherit;">
                                <h3 class="editContent title" style="outline: none; cursor: inherit;">Yusuph Kaondo</h3>
                                <span class="post editContent" style="outline: none; cursor: inherit;">role in detail</span>
                                <ul class="social">
                                    <li><a href="#" class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-facebook" style="outline: none; cursor: inherit;"></span></a></li>
                                    <li><a href="#" class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-twitter" style="outline: none; cursor: inherit;"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- //team -->
        <!-- slide -->
        <section class="wthree-slie-btm py-lg-5 editContent" style="outline: none; cursor: inherit;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slide-banner bg bg1 mb-4 pl-0" style="outline: none; cursor: inherit;">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mb-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="container">
                            <div class="wthree_pvt_title editContent" style="outline: none; cursor: inherit;">
                                <h4 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A;">creative solutions
                                </h4>
                                <span class="sub-title">our creativity is on:</span>
                            </div>
                            <div class="row flex-column editContent" style="outline: none; cursor: inherit;">
                                <div class="abt-grid mt-4 editContent" style="outline: none; cursor: inherit;">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="abt-icon editContent" style="outline: none; cursor: inherit;">
                                                <span class="fa fa-ravelry" style="outline: none; cursor: inherit;"></span>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                           <div class="abt-txt ml-0 editContent">
                                                <h4 class="editContent" style="color:#15677A;">Developing softwares remotely</h4>
                                                <p class="editContent">Developers around the world sharing their skills and working together on the development of various software from Our Customers</p><br>
                                                <a href="software_development.php"><button class="btn btn-info">Develop yours with us now</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="abt-grid mt-4 editContent">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="abt-icon editContent">
                                                <span class="fa fa-laptop"></span>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="abt-txt ml-0 editContent">
                                                <h4 class="editContent" style="color:#15677A;">Online Courses</h4>
                                                <p class="editContent">No need of wasting time of travel to classes, what you need is only internet and your willigness to Learn we offer various courses from Trainers around the world.</p><br>
                                                <a href="courses.php"><button class="btn btn-info">Learn with us now</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //slide -->
        <!-- testimonials -->
        <div class="testimonials align-w3 editContent" id="testi" style="outline: none; cursor: inherit;">
            <div class="container">
                <div class="wthree_pvt_title text-center editContent" style="outline: none; cursor: inherit;">
                    <h4 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A;">testimonials
                    </h4>
                    <p class="editContent sub-title" style="outline: none; cursor: inherit;">Subheadings stand out because they are like mini titles. They make
                        your post
                        stand
                        out and
                        make it more readable.</p>
                </div>
                <div class="carousel-inner">
                    <div class="row">
                        <div class="col-lg-6 editContent mt-4" style="outline: none; cursor: inherit;">
                            <div class="testimonials_grid editContent" style="outline: none; cursor: inherit;">
                                <div class="testi-text text-center">
                                    <p class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-quote-left" style="outline: none; cursor: inherit;"></span>Stet clita kasd
                                        gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right" style="outline: none; cursor: inherit;"></span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="testi-desc">
                                        <span class="fa fa-user" style="outline: none; cursor: inherit;"></span>
                                        <h5 class="editContent" style="outline: none; cursor: inherit;">Aliquyam</h5>
                                        <p class="editContent" style="outline: none; cursor: inherit;">Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 editContent mt-4" style="outline: none; cursor: inherit;">
                            <div class="testimonials_grid  editContent" style="outline: none; cursor: inherit;">
                                <div class="testi-text text-center">
                                    <p class="editContent" style="outline: none; cursor: inherit;"><span class="fa fa-quote-left" style="outline: none; cursor: inherit;"></span>Stet clita kasd
                                        gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet<span class="fa fa-quote-right" style="outline: none; cursor: inherit;"></span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="testi-desc">
                                        <span class="fa fa-user" style="outline: none; cursor: inherit;"></span>
                                        <h5 class="editContent" style="outline: none; cursor: inherit;">Aliquyam</h5>
                                        <p class="editContent" style="outline: none; cursor: inherit;">Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //testimonials -->

        <!-- footer -->
         <?php 
        include"footer.php";
        ?>


</body></html>