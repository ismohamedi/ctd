    <?php
    session_start();
    if(!$_SESSION['email']){
        echo'<script>window.location.assign("../login.php")</script>';
    }
        include"header.php";
         ?>
        <!-- //header -->
        <!-- inner banner -->
        <!-- //breadcrumbs -->
        <!-- blog post-->
        <style type="text/css">
            .post-wthree h1,h2,h3,h4,h5,h6{
                color:#15677A;
            }
        </style>
        <section class="post-wthree align-w3 editContent" id="blog" style="outline: none; cursor: inherit;">
            <div class="container">
                <div class="wthree_pvt_title text-center editContent" style="outline: none; cursor: inherit;">
                    <h5 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A;">Jobs, Developement related adeas and kwoledge sharing
                    </h5>
                    <p class="editContent sub-title" style="outline: none; cursor: inherit;">
                        <!-- here to be variable from the database for ads to devs -->

                    </p>
                </div>
                <div class="row">
                    <!-- right side -->
                    <div class="col-lg-4 event-right editContent mb-4" style="outline: none; cursor: inherit;">
                        <div class="event-right1">
                            <div class="categories mb-4 p-sm-4 p-3 border editContent" style="outline: none; cursor: inherit;">
                                <h3 class="editContent courses-title" style="outline: none; cursor: inherit;color:#15677A;">Categories</h3>
                                <ul>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-folder-open" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">Your current project</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-folder" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit; font-weight: bold;">Coding materials</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-gears" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">Job posts</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-group" style="outline: none; cursor: inherit;"></span>
                                        <a href="forum_chat.php" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">Project-Group forum chat</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-mobile" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">Project Team-members Contacts</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-wrench" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">Create a Project-Group</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="search1 editContent" style="outline: none; cursor: inherit;">
                                <form class="form-inline" action="#" method="post">
                                    <input class="form-control rounded-0 mr-sm-2 editContent" type="search" placeholder="Search Here" aria-label="Search" required="" style="outline: none; cursor: inherit;">
                                    <button class="btn bg-theme text-wh rounded-0 mt-3 w-100" type="submit" style="outline: none; cursor: inherit;">Search</button>
                                </form>
                            </div>
                            <div class="posts p-4 border mt-4 editContent" style="outline: none; cursor: inherit;">
                                <h3 class="editContent courses-title" style="outline: none; cursor: inherit;color:#15677A;">Comming Events</h3>
                                <div class="posts-grids">
                                    <div class="row posts-grid mt-4 editContent" style="outline: none; cursor: inherit;">
                                        <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                            <a href="single.html">
                                                <img src="bundles/images/g1.jpg" alt=" " class="img-fluid img-thumbnail" style="outline: none; cursor: inherit;">
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4">
                                            <h4>
                                                <a href="single.html" class="text-bl editContent" style="outline: none; cursor: inherit;">Sed ut perspiciatis</a>
                                            </h4>
                                            <ul class="wthree_courses_events_list mt-2">
                                                <li class="mr-2 text-bl editContent" style="outline: none; cursor: inherit;">
                                                    <span class="fa fa-calendar mr-2" aria-hidden="true" style="outline: none; cursor: inherit;"></span>15/05/2019</li>
                                                <li class="editContent" style="outline: none; cursor: inherit;">
                                                    <span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                                                    <a href="single.html" class="text-bl ml-2 editContent" style="outline: none; cursor: inherit;">Admin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row posts-grid mt-4 editContent" style="outline: none; cursor: inherit;">
                                        <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                            <a href="single.html">
                                                <img src="bundles/images/g2.jpg" alt=" " class="img-fluid img-thumbnail" style="outline: none; cursor: inherit;">
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4 editContent" style="outline: none; cursor: inherit;">
                                            <h4>
                                                <a href="single.html" class="text-bl editContent" style="outline: none; cursor: inherit;">Perspiciatis unde
                                                    omni</a>
                                            </h4>
                                            <ul class="wthree_courses_events_list mt-2">
                                                <li class="mr-2 text-bl editContent" style="outline: none; cursor: inherit;">
                                                    <span class="fa fa-calendar mr-2" aria-hidden="true" style="outline: none; cursor: inherit;"></span>23/05/18</li>
                                                <li class="editContent" style="outline: none; cursor: inherit;">
                                                    <span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                                                    <a href="single.html" class="text-bl ml-2 editContent" style="outline: none; cursor: inherit;">Admin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row posts-grid mt-4 editContent" style="outline: none; cursor: inherit;">
                                        <div class="col-lg-4 col-sm-4 posts-grid-left pr-0">
                                            <a href="single.html">
                                                <img src="bundles/images/g3.jpg" alt=" " class="img-fluid img-thumbnail" style="outline: none; cursor: inherit;">
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-sm-8 posts-grid-right mt-sm-0 mt-4 editContent" style="outline: none; cursor: inherit;">
                                            <h4>
                                                <a href="single.html" class="text-bl editContent" style="outline: none; cursor: inherit;">Sed ut perspiciatis</a>
                                            </h4>
                                            <ul class="wthree_courses_events_list mt-2">
                                                <li class="mr-2 text-bl editContent" style="outline: none; cursor: inherit;">
                                                    <span class="fa fa-calendar mr-2" aria-hidden="true" style="outline: none; cursor: inherit;"></span>13/06/18</li>
                                                <li class="editContent" style="outline: none; cursor: inherit;">
                                                    <span class="fa fa-user" aria-hidden="true" style="outline: none; cursor: inherit;"></span>
                                                    <a href="single.html" class="text-bl ml-2 editContent" style="outline: none; cursor: inherit;">Admin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tags mt-4 p-4 border editContent" style="outline: none; cursor: inherit;">
                                <h3 class="editContent courses-title" style="outline: none; cursor: inherit;color:#15677A;">Recent Tags</h3>
                                <ul class="mt-4">
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">dfre</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">Gahydwq</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">qeers</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">hysert</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">hjwsa</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">sumgr</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">nhyewq</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">njyra</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">laiuwa</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">loghw</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">mhyu</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">mojjs</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">suisq</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="text-bl border btn" style="outline: none; cursor: inherit;">bhyfgh</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //right side -->

                    <div class="col-lg-8 single-left mt=lg=0 mt-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="single-left1">
                            <h5 class="editContent card-title" style="outline: none; cursor: inherit;">
                                Sed ut perspiciatis unde omnis iste.
                            </h5>
                            <p class="editContent" style="outline: none; cursor: inherit;">In consectetur, elit in scelerisque malesuada, tellus leo viverra
                                massa, nec malesuada
                                turpis lectus
                                ac urna. Suspendisse ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit
                                amet,
                                fermentum
                                viverra eros. Praesent neque purus, rhoncus nec nibh non, mollis sodales odio. Nullam
                                facilisis
                                diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices.
                                Aliquam ac
                                arcu
                                interdum, dapibus nibh convallis, semper augue.
                            </p>
                            <div class="mt-4 editContent" style="outline: none; cursor: inherit;">
                                <span class="badge badge-primary editContent" style="outline: none; cursor: inherit;">Posted 2018-11-02 20:47:04</span>
                                <div class="float-sm-right">
                                    <a href="#" class="badge badge-primary editContent" style="outline: none; cursor: inherit;">story</a>
                                    <a href="#" class="badge badge-secondary editContent" style="outline: none; cursor: inherit;">personal</a>
                                    <a href="#" class="badge badge-success editContent" style="outline: none; cursor: inherit;">social</a>
                                    <a href="#" class="badge badge-danger editContent" style="outline: none; cursor: inherit;">info</a>
                                </div>
                            </div>
                            <hr>
                            <img src="bundles/images/g3.jpg" alt=" " class="img-fluid img-thumbnail mb-3" style="outline: none; cursor: inherit;">

                            <ul class="courses_list my-3">
                                <li>
                                    <h6 class="editContent courses-first text-bl my-4" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-user mr-2" style="outline: none; cursor: inherit;"></span>Jenny Joy
                                    </h6>
                                </li>
                                <li class="mx-3 editContent" style="outline: none; cursor: inherit;">
                                    <a href="#">
                                        <span class="fa fa-heart mr-1" style="outline: none; cursor: inherit;"></span>
                                        22</a>
                                </li>
                                <li class="editContent" style="outline: none; cursor: inherit;">
                                    <a href="#">
                                        <span class="fa fa-comments mr-1" style="outline: none; cursor: inherit;"></span>
                                        16</a>
                                </li>
                            </ul>
                            <h5 class="card-title">
                                <a href="single.html" class="text-bl editContent" style="outline: none; cursor: inherit;">Sed ut perspiciatis unde omnis iste.</a>
                            </h5>
                            <p class="editContent" style="outline: none; cursor: inherit;">In consectetur, elit in scelerisque malesuada, tellus leo viverra
                                massa, nec malesuada
                                turpis lectus
                                ac urna. Suspendisse ut neque orci. Phasellus tellus diam, pulvinar sit amet elit sit
                                amet,
                                fermentum
                                viverra eros. Praesent neque purus, rhoncus nec nibh non, mollis sodales odio. Nullam
                                facilisis
                                diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices.
                                Aliquam ac
                                arcu
                                interdum, dapibus nibh convallis, semper augue.
                            </p>
                        </div>
                        <div class="admin p-4 my-4 editContent" style="outline: none; cursor: inherit;">
                            <p class="editContent" style="outline: none; cursor: inherit;">
                                <span class="fa fa-quote-left mr-2" style="outline: none; cursor: inherit;"></span>nibh eu consequat magna ipsum ac ex. Nulla
                                iaculis
                                tincidunt elit, tortor luctus sit amet.
                                Morbi in porta dolor. Morbi eget dui elit. consequat magna ipsum ac ex, Nulla iaculis
                                consequat
                                magna ipsum ac ex Nulla iaculis.
                                <span class="fa fa-quote-right ml-2" style="outline: none; cursor: inherit;"></span>
                            </p>
                            <a href="#" class="mt-3 font-weight-bold text-right blockquote-footer editContent" style="outline: none; cursor: inherit;">James
                                Doe</a>
                        </div>
                        <div class="row single-left2 editContent" style="outline: none; cursor: inherit;">
                            <div class="col-md-6 single-left2-left mb-4 editContent" style="outline: none; cursor: inherit;">
                                <ul>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">At vero eos et accusamus iusto</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Sed ut perspiciatis unde omnis</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Accusantium doloremque lauda</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Vel illum qui dolorem fugiat quo</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Quis autem vel eum repreh</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Neque porro quisquam est qui</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 single-left2-left mb-4 editContent" style="outline: none; cursor: inherit;">
                                <ul>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">At vero eos et accusamus iusto</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Sed ut perspiciatis unde omnis</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Accusantium doloremque lauda</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Vel illum qui dolorem fugiat quo</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Quis autem vel eum repreh</a>
                                    </li>
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-check mr-2" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html">Neque porro quisquam est qui</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comments my-5 editContent" style="outline: none; cursor: inherit;">
                            <h3 class="editContent courses-title editContent" style="outline: none; cursor: inherit;color:#15677A;">Recent Comments</h3>
                            <div class="comments-grids mt-4">
                                <div class="media mt-4 editContent" style="outline: none; cursor: inherit;">
                                    <img class="mr-3" src="bundles/images/m.png" alt="Generic placeholder image" style="outline: none; cursor: inherit;">
                                    <div class="media-body comments-grid-right editContent" style="outline: none; cursor: inherit;">
                                        <h4 class="editContent" style="outline: none; cursor: inherit;">Parker Moe</h4>
                                        <ul class="my-2 editContent" style="outline: none; cursor: inherit;">
                                            <li class="font-weight-bold editContent" style="outline: none; cursor: inherit;">6 June 2018
                                                <i>|</i>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-bold editContent" style="outline: none; cursor: inherit;">Reply</a>
                                            </li>
                                        </ul>
                                        <p class="editContent" style="outline: none; cursor: inherit;">mattis ut hendrerit non, facilisis eget mauris. Sed
                                            ultricies nec purus quis
                                            tempor.
                                            Phasellus bibendum eu.</p>
                                    </div>
                                </div>
                                <div class="media mt-sm-5 mt-3 editContent" style="outline: none; cursor: inherit;">
                                    <a class="pr-3" href="#">
                                        <img src="bundles/images/f.png" alt="Generic placeholder image" style="outline: none; cursor: inherit;">
                                    </a>
                                    <div class="media-body comments-grid-right editContent" style="outline: none; cursor: inherit;">
                                        <h4 class="editContent" style="outline: none; cursor: inherit;">Parker Moe</h4>
                                        <ul class="my-2 editContent" style="outline: none; cursor: inherit;">
                                            <li class="font-weight-bold editContent" style="outline: none; cursor: inherit;">6 June 2018
                                                <i>|</i>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-bold editContent" style="outline: none; cursor: inherit;">Reply</a>
                                            </li>
                                        </ul>
                                        <p class="editContent" style="outline: none; cursor: inherit;">mattis ut hendrerit non, facilisis eget mauris. Sed
                                            ultricies nec
                                            purus
                                            quis
                                            tempor. Phasellus bibendum eu.</p>
                                    </div>
                                </div>
                                <div class="media mt-sm-5 mt-3 editContent" style="outline: none; cursor: inherit;">
                                    <a class="pr-3" href="#">
                                        <img src="bundles/images/f.png" alt="Generic placeholder image" style="outline: none; cursor: inherit;">
                                    </a>
                                    <div class="media-body comments-grid-right editContent" style="outline: none; cursor: inherit;">
                                        <h4 class="editContent" style="outline: none; cursor: inherit;">Parker Moe</h4>
                                        <ul class="my-2 editContent" style="outline: none; cursor: inherit;">
                                            <li class="font-weight-bold editContent" style="outline: none; cursor: inherit;">6 June 2018
                                                <i>|</i>
                                            </li>
                                            <li>
                                                <a href="#" class="font-weight-bold editContent" style="outline: none; cursor: inherit;">Reply</a>
                                            </li>
                                        </ul>
                                        <p class="editContent" style="outline: none; cursor: inherit;">mattis ut hendrerit non, facilisis eget mauris. Sed
                                            ultricies nec
                                            purus
                                            quis
                                            tempor. Phasellus bibendum eu.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-coment-form editContent" style="outline: none; cursor: inherit;">
                            <h3 class="editContent courses-title  mb-4" style="outline: none; cursor: inherit;">Leave a Reply</h3>
                            <form action="#" method="post" class="editContent mb-4" style="outline: none; cursor: inherit;">
                                <div class="row">
                                    <div class="col-sm-6 form-group editContent" style="outline: none; cursor: inherit;">
                                        <input type="text" name="Name" class="form-control" placeholder="Name" required="">
                                    </div>
                                    <div class="col-sm-6 form-group editContent" style="outline: none; cursor: inherit;">
                                        <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                    <textarea name="Message" class="form-control" placeholder="Your comment here..." required=""></textarea>
                                </div>
                                <div class="mm_single_submit">
                                    <button type="submit" class="btn" style="outline: none; cursor: inherit;">Post Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- //left side -->
                </div>
            </div>
        </section>
        <!-- //blog post -->
        <!-- footer -->
         <?php 
        include"footer.php";
        ?>


</body></html>