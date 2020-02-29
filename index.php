<!-- header -->
        <?php
        session_start();
        if(!$_SESSION['email']){
        include"header.php";
        }
        else{
            include"header2.php";
            }
         ?>
        
        <!-- //header -->

        <!-- banner -->
        <section class="banner bg bg1">
            
            <!-- banner text -->
            <div class="container">
                <div class="banner_text_wthree_pvt">
                    <h3 class="editContent home-banner-w4" style="background: rgba(0, 0, 0, 0.5);border-radius: 15px; padding: 0 2; color: white; text-align: center;"><b style="color: red">Code</b><b style="color: lightblue">Tech</b><b style="color: lightgreen">Developers</b> Community is a Center of solving your problems.</h3>

                    <p class="editContent bnr-txt" style="background: rgba(0, 0, 0, 0.5);border-radius: 15px; padding: 0 8;">If you are a new here please move up to the bottom to see what we offer. but also you can select the category of your choice bellow:
                    </p>
                    <div class="row editContent">
                        <div class="col-lg-4">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <select class="custom-select editContent" id="inputGroupSelect04" aria-label="Example select with button addon">
                                        <option selected="">Choose...</option>
                                        <option value="1">forum chat</option>
                                        <option value="3">Upcoming Events</option>
                                        <option value="2">projects</option>
                                        <option value="3">Developers</option>
                                        <option value="3">our offers</option>
                                        <option value="3">our clients</option>
                                    </select>
                                    <!-- on click go now check for id if the id is 
                                    partcular id then direct to the particular destination
                                    otherwise go to the home of the system -->



                                    <div class="input-group-append">
                                        <button class="btn btn-info" type="button">go now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //banner text -->
            <!-- banner-bottom -->
            <div class="banner-bottom-w3ls editContent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-6 mt-4 editContent">
                            <a href="courses.php">
                            <div class="bb-img">
                                <img src="bundles/images/a2.jpg" class="img-fluid img-thumbnail" alt="">
                                <h3 class="editContent" style="color:#15677A;">Online Courses</h3>

                               <!--  we have to direct the user to the particular online courses if not logged in has to direct him or her to the home page of the courses -->

                            </div>
                            </a>
                        </div>
                        <div class="col-sm-4 col-6 mt-4 editContent">
                            <a href="software_development.php">
                            <div class="bb-img">
                                <img src="bundles/images/a1.jpg" class="img-fluid img-thumbnail" alt="">
                                <h3 class="editContent" style="color:#15677A;">Software Development</h3>
                               <!--  we have to direct user to the page of software development with the list of softwaews which developed by us and companies which developed for. also providing the room for them to order the software by contacting -->

                            </div>
                        </a>
                        </div>
                        <div class="col-sm-4 col-6 mt-4 editContent">
                            <a href="software_jobs.php">
                            <div class="bb-img">
                                <img src="bundles/images/a3.jpg" class="img-fluid img-thumbnail" alt="">
                                <h3 class="editContent"  style="color:#15677A;">remotely Jobs</h3>

                               <!--  here has to the list of jobs to be done by different developers who are remotely located in different parties of the world and if the job is assigned to the developers has to be removed in the job list so as people to stop apply for that. -->
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //banner-bottom -->
        </section>
        <!-- //banner -->
        <!-- about-->
        <section class="single_grid_w3_main align-w3-abt editContent" id="about">
            <div class="container">
                <div class="wthree_pvt_title text-center editContent">
                    <h4 class="editContent w3pvt-title" style="color:#15677A;">Superior Services</h4>
                    <p class="editContent sub-title">As a community we are problem solvers, CodeTechDevelopers Community currently focus on the following services:</p>
                </div>
                <div class="row mb-4 editContent">
                    <div class="col-lg-4 mt-4 editContent">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon editContent">
                                        <span class="fa fa-key"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt editContent">
                                        <h4 class="editContent" style="color:#15677A;">Customer</h4>
                                        <p class="editContent">As a customer here is a special place for you for Developing your software with us. such as Mobile Apps, websites and web-systesms</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 editContent">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon editContent">
                                        <span class="fa fa-pencil"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt editContent">
                                        <h4 class="editContent" style="color:#15677A;">Student/Learner</h4>
                                        <p class="editContent">As a Learner here is a particular place where you can get a skills for developing your carrier. you can learn each and everything as you wish from our proffesional Trainers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 editContent">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon editContent">
                                        <span class="fa fa-laptop"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt editContent">
                                        <h4 class="editContent" style="color:#15677A;">Developer</h4>
                                        <p class="editContent">Here is a particular place for you to get a job for software developemt with good and ontime payment, we work remotely </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="about.php#service"><button class="btn btn-info">view more</button></a>
                </div>
            </div>
        </section>
        <!-- //about -->
        <!-- services -->
        <section class="bg-services position-relative align-w3 bg bg1" id="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="services-bg-color">
                            <div class="wthree_pvt_title mb-3 editContent">
                                <h4 class="editContent w3pvt-title" style="color:#15677A;">what we provide
                                </h4>
                                <span class="sub-title">As a community we provide a lot of services, some of them are:</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6 service-title mt-4 editContent">
                                    <h4 class="editContent home-title text-theme" style="color:#15677A;">For Customers</h4>
                                    <p class="editContent sec-4">Software development, software refactoring, system configuration and Technical advace about systems.
                                    </p>
                                </div>
                                <div class="col-md-6 service-title mt-4 editContent">
                                    <h4 class="editContent home-title text-theme" style="color:#15677A;background: white;">For Students/Learners</h4>
                                    <p class="editContent sec-4" style="background:white;">We provide training especially by Online courses but soon we are going to have face to face tringing on different areas of the world just for insperation for people to acquire skills.
                                    </p>
                                </div>
                                <div class="col-md-6 service-title mt-4 editContent">
                                    <h4 class="editContent home-title text-theme" style="color:#15677A;">For Developers</h4>
                                    <p class="editContent sec-4">We provide remotely job for certicified Developers who are registered and working remotely for various software projects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-2"></div>
                </div>
            </div>
        </section>
                <div id="gal1" class="popup-effect animate">
                    <div class="popup">
                        <img src="bundles/images/g1.jpg" alt="Popup Image" class="img-fluid">
                        <p class="editContent editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra
                            ac int.
                            placerat placerat
                            dolor.</p>
                        <a class="close" href="#gallery">×</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal2" class="popup-effect animate">
                    <div class="popup">
                        <img src="bundles/images/g2.jpg" alt="Popup Image" class="img-fluid">
                        <p class="editContent editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra
                            ac int.
                            placerat placerat
                            dolor.</p>
                        <a class="close" href="#gallery">×</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal3" class="popup-effect animate">
                    <div class="popup">
                        <img src="bundles/images/g3.jpg" alt="Popup Image" class="img-fluid">
                        <p class="editContent editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra
                            ac int.
                            placerat placerat
                            dolor.</p>
                        <a class="close" href="#gallery">×</a>
                    </div>
                </div>
                <!-- //popup3 -->
                <!-- popup-->
                <div id="gal4" class="popup-effect animate">
                    <div class="popup">
                        <img src="bundles/images/g4.jpg" alt="Popup Image" class="img-fluid">
                        <p class="editContent editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra
                            ac int.
                            placerat placerat
                            dolor.</p>
                        <a class="close" href="#gallery">×</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal5" class="popup-effect animate">
                    <div class="popup">
                        <img src="bundles/images/g5.jpg" alt="Popup Image" class="img-fluid">
                        <p class="editContent editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra
                            ac int.
                            placerat placerat
                            dolor.</p>
                        <a class="close" href="#gallery">×</a>
                    </div>
                </div>
                <!-- //popup -->
                <!-- popup-->
                <div id="gal6" class="popup-effect animate">
                    <div class="popup">
                        <img src="bundles/images/g6.jpg" alt="Popup Image" class="img-fluid">
                        <p class="editContent editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra
                            ac int.
                            placerat placerat
                            dolor.</p>
                        <a class="close" href="#gallery">×</a>
                    </div>
                </div>
                <!-- //popup -->
            </div>
       <!--  </div> -->
        <!-- //Portfolio -->

        <!-- slide -->
        <section class="wthree-slie-btm py-lg-5 editContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slide-banner bg bg1 mb-4 pl-0">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mb-4 editContent">
                        <div class="container">
                            <div class="wthree_pvt_title editContent">
                                <h4 class="editContent w3pvt-title" style="color:#15677A;">creative solutions
                                </h4>
                                <span class="sub-title">our creativity is on:</span>
                            </div>
                            <div class="row flex-column editContent">
                                <div class="abt-grid mt-4 editContent">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="abt-icon editContent">
                                                <span class="fa fa-key"></span>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //slide -->
        <!-- blog -->
        <section class="blog_w3ls align-w3 editContent" id="posts">
            <div class="container">
                <div class="wthree_pvt_title text-center editContent">
                    <h4 class="editContent w3pvt-title" style="color:#15677A;">latest Events
                    </h4>
                    <p class="editContent sub-title">Here is a list of events occers in current days under CodeTechDevelopers Community including Lounching of software, Introduction of new courses.</p>
                </div>
                <div class="row mb-4 space-sec editContent">
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6 mt-4 editContent">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="single.html">
                                    <img class="card-img-bottom" src="bundles/images/g1.jpg" alt="Card image cap">
                                    <span class="post-icon editContent">blog post</span>
                                </a>
                            </div>
                            <div class="card-body editContent">
                                <h5 class="blog-title card-title font-weight-bold" style="color:#15677A;">
                                    <a href="single.html" class="editContent">Cras ultricies ligula sed.</a>
                                </h5>
                                <p class="editContent">At vero eos et accusam et justo duo dolores et ea rebum. Lorem
                                    ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                                <a href="single.html" class="btn blog_link">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6 mt-4 editContent">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="single.html">
                                    <img class="card-img-bottom" src="bundles/images/g2.jpg" alt="Card image cap">
                                    <span class="post-icon editContent">blog post</span>
                                </a>
                            </div>
                            <div class="card-body editContent">
                                <h5 class="blog-title card-title font-weight-bold" style="color:#15677A;">
                                    <a href="single.html" class="editContent">magna porta au blandita.</a>
                                </h5>
                                <p class="editContent">At vero eos et accusam et justo duo dolores et ea rebum. Lorem
                                    ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                                <a href="single.html" class="btn blog_link">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                    <!-- blog grid -->
                    <div class="col-lg-4 col-md-6 mt-4 blog-end editContent">
                        <div class="card">
                            <div class="card-header p-0  position-relative">
                                <a href="single.html">
                                    <img class="card-img-bottom" src="bundles/images/g3.jpg" alt="Card image cap">
                                    <span class="post-icon editContent">blog post</span>
                                </a>
                            </div>
                            <div class="card-body editContent">
                                <h5 class="blog-title card-title font-weight-bold" style="color:#15677A;">
                                    <a href="single.html" class="editContent" >Cras ultricies ligula sed.</a>
                                </h5>
                                <p class="editContent">At vero eos et accusam et justo duo dolores et ea rebum. Lorem
                                    ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                                <a href="single.html" class="btn blog_link">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- //blog grid -->
                </div>
            </div>
        </section>
        <!-- //blog -->
        <!-- footer -->
        <?php 
        include"footer.php";
        ?>


</body></html>