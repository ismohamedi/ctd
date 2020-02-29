    <?php
    session_start();
    if(!$_SESSION['email']){
        echo'<script>window.location.assign("../login.php")</script>';
    }
        include"header.php";
        include '../database/ctdconnect.php';
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
                <div class="row">
                    <!-- right side -->
                 <?php include 'categories.php'; ?>
                    <!-- //right side -->

                    <div class="col-lg-8 single-left mt=lg=0 mt-4 editContent" style="outline: none; cursor: inherit;">
                        <div class="single-left1">
                            <!--  <div class="wthree_pvt_title text-center editContent" style="outline: none; cursor: inherit; margin-top: -70px">
                    <h5 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A;" align="center">IPSN project forum chat
                    </h5>
                    <p class="editContent sub-title" style="outline: none; cursor: inherit;">
                       

                    </p>
                </div> -->
                <div class="forum" style="margin-top: -70px">
                    <div class="form-group editContent" id="send">
            <div class="row justify-content-center h-100">
                <div class="col-md-8 col-xl-6 chat">
                    <div class="card">
                        <div class="card-header msg_head">
                            <div class="d-flex bd-highlight" style="height: 2em">
                                <div class="img_cont">
                                    <!-- <img src="https://devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg" class="rounded-circle user_img">
                                    <span class="online_icon"></span> -->
                                </div>
                                <div class="user_info">
                                    <span id="chat_head">IPSN project forum chat</span>
                                    <!-- <p>1767 Messages</p> -->
                                </div>
                            </div>
                            <span id="action_menu_btn"><i class="fa fa-ellipsis-v"></i></span>
                            <div class="action_menu">
                                <ul>
                                    <li><i class="fa fa-user-circle"></i><a href="dev_profile.php" style="color: white"> View profile</a></li>
                                    <li><i class="fa fa-users"></i><a href="" style="color: white"> View project members</a></li>
                                    <li><i class="fa fa-ban" style="color: red"><a href="" style="color: red"> </i> Leave the group</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body">


                            <?php
                            $Messages = mysqli_query($connection,"SELECT * FROM `chat_room` order by sent_on desc");
                            while($data = mysqli_fetch_array($Messages)){
                            ?>
                            <div class="d-flex justify-content-start mb-4">

                                    <?php
                                    //////////////// CHECKING FOR THE MESSAGE SENDER////////////////////
                                    $email    = $_SESSION['email'];
                                    $dev_id   = mysqli_query($connection,"SELECT * FROM users, chat_room WHERE users.id = chat_room.sender_Id AND users.email ='$email'");
                                    $data_taken1 = mysqli_fetch_array($dev_id);
                                    $user_id  = $data_taken1['id'];
                                    ?>
                                <div class="img_cont_msg">
                                    <img src="<?php echo'../profile_photos/'.$data_taken1['photo'].'' ?>" class="rounded-circle user_img_msg">
                                </div>
                                <div class="msg_cotainer">
                                    <?php 

                                    if($data['sender_Id'] != $user_id) {
                                        echo $data['message'];
                                    }
                                     ?>

                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                     <?php
                                    $email    = $_SESSION['email'];
                                    $dev_id   = mysqli_query($connection,"SELECT * FROM developers_accounts, chat_room   WHERE developers_accounts.dev_id = chat_room.sender_Id AND developers_accounts.email ='$email'");
                                    $data_taken = mysqli_fetch_array($dev_id);
                                    $user_id  = $data_taken['dev_id'];


                                    if($data['sender_Id'] == $user_id) {
                                        echo $data['message'];
                                    }
                                     ?>
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                            <img src="<?php echo'../profile_photos/'.$data_taken['photo'].'' ?>" class="rounded-circle user_img_msg">
                                </div>
                            </div>
                        <?php }?>
                        </div>
                        <form action="send_message.php" name="form" method="get" enctype="multipart/form-data">
                        <div class="card-footer">
                            <div class="input-group" style="height: 3.3em">
                                <div class="input-group-append">
                                    <span class="input-group-text attach_btn" onclick=""><i class="fa fa-paperclip"></i> <input type="file" name="attachment"></span>
                                </div>
                                <textarea name="message" class="form-control type_msg" placeholder="Type your message..." id="message"></textarea>
                                <div class="input-group-append">
                                    <span class="input-group-text send_btn" ><i class="fa fa-send" onclick="form.submit()"></i></span>
                                </div>

                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    <script type="text/javascript">
            $(document).ready(function(){
$('#action_menu_btn').click(function(){
    $('.action_menu').toggle();
});
    });
    </script>
    <script type="text/javascript" src="../bundles/js/send_message.js"></script>
                        <!-- style for forum chat area -->
                    

                    </div>


                </div>
                    
                        </div>
                        <!--  -->
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