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
        <!-- contact -->
        <section class="contact-wthree align-w3 editContent" id="contact" style="outline: none; cursor: inherit;">
            <div class="container">
                <div class="wthree_pvt_title text-center editContent" style="outline: none; cursor: inherit;">
                    <h4 class="editContent w3pvt-title" style="outline: none; cursor: inherit;color:#15677A; ">contact us
                    </h4>
                    <p class="editContent sub-title" style="outline: none; cursor: inherit;">For the needs of the software development as Customers, Carrier Development as Programmers/Developers and Learning probles for Students/Learners please contact us by sending a note or calling, emailing by the given contacts. we are available 24/7.</p>
                </div>

                <!-- <div class="mx-auto text-center">
                    was a map area
                    <iframe class="mt-lg-4 contact-form-wthreelayouts editContent" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2798902705!2d-74.25986790365911!3d40.697670067823786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1536917325197" allowfullscreen="" style="outline: none; cursor: inherit;"></iframe>
                    <!//footer right -->
               <!--  </div>  -->
                <div class="row mt-5 editContent" style="outline: none; cursor: inherit;">
                    <div class="col-lg-7 mb-4 editContent" style="outline: none; cursor: inherit;">
                        <h5 class="editContent cont-form" style="outline: none; cursor: inherit;color:#15677A;">send us a note</h5>
                        <div class="contact-form-wthreelayouts editContent" style="outline: none; cursor: inherit;">
                            <form action="contact1.php" method="post" class="register-wthree editContent" style="outline: none; cursor: inherit;">
                                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                    <label class="editContent" style="outline: none; cursor: inherit;">
                                        Your Name
                                    </label>
                                    <input class="form-control" type="text" placeholder="Johnson" name="name" required="">
                                </div>
                                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                    <label class="editContent" style="outline: none; cursor: inherit;">
                                        Mobile
                                    </label>
                                    <input class="form-control" type="text" placeholder="xxxx xxxxx" name="phone" required="">
                                </div>
                                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                    <label class="editContent" style="outline: none; cursor: inherit;">
                                        Email
                                    </label>
                                    <input class="form-control" type="email" placeholder="example@email.com" name="email" required="">
                                </div>
                                <div class="form-group editContent" style="outline: none; cursor: inherit;">
                                    <label class="editContent" style="outline: none; cursor: inherit;">
                                        Your message
                                    </label>
                                    <textarea placeholder="Type your message here" class="form-control" name="comment"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-info btn-block bg-theme text-wh w-100 font-weight-bold text-uppercase" style="outline: none; cursor: inherit;" name="send">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 text-center editContent mb-4" style="outline: none; cursor: inherit;">
                        <h5 class="editContent cont-form" style="outline: none; cursor: inherit;color:#15677A;">get in touch</h5>
                        <div class="row flex-column">
                            <div class="contact-w3 mb-4 editContent" style="outline: none; cursor: inherit;">
                                <div class="bg-clr-w3ls mb-3 editContent" style="outline: none; cursor: inherit;">
                                    <span class="fa fa-envelope-open " style="outline: none; cursor: inherit;"></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="mailto:codetechdevelopers1@gmail.com" class="d-block mb-2 editContent" style="outline: none; cursor: inherit;">codetechdevelopers1@gmail.com</a>
                                    <a href="mailto:codetechdevelopers2@gmail.com" class="mb-2 d-block editContent" style="outline: none; cursor: inherit;">codetechdevelopers2@gmail.com</a>
                                    <a href="mailto:codetechdevelopers3@gmail.com" class="mb-2 editContent" style="outline: none; cursor: inherit;">codetechdevelopers3@gmail.com</a>
                                </div>
                            </div>
                            <div class="contact-w3 mb-4 editContent" style="outline: none; cursor: inherit;">
                                <div class="bg-clr-w3ls mb-3 editContent" style="outline: none; cursor: inherit;">
                                    <span class="fa fa-phone" style="outline: none; cursor: inherit;"></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="editContent mt-1" style="outline: none; cursor: inherit;">+255763080423</p>
                                    <p class="editContent mt-1" style="outline: none; cursor: inherit;">+255767590820</p>
                                    <p class="editContent mt-1" style="outline: none; cursor: inherit;">+255********</p>
                                </div>
                            </div>
                            <div class="contact-w3 mb-4 editContent" style="outline: none; cursor: inherit;">
                                <div class="bg-clr-w3ls mb-3 editContent" style="outline: none; cursor: inherit;">
                                    <span class="fa fa-home" style="outline: none; cursor: inherit;"></span>
                                </div>
                                <address class="editContent mb-2" style="outline: none; cursor: inherit;">HQ - Morogoro Tanzania <br>Songea Tanzania<br> Dar es salaam Tanzania</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //contact -->
        <!-- footer -->
         <?php 
        include"footer.php";
        ?>


</body></html>