   <style type="text/css">
       #categories{
        display: block;
       }
   </style>

   <div class="col-lg-4 event-right editContent mb-4" style="outline: none; cursor: inherit;">
                        <div class="event-right1">
                            <div class="categories mb-4 p-sm-4 p-3 border editContent" style="outline: none; cursor: inherit;">
                                <h3 class="editContent courses-title" style="outline: none; cursor: pointer;color:#15677A;" onclick="categories()">Categories</h3>


                                <ul id="categories">
                                    <li class="mt-3 editContent" style="outline: none; cursor: inherit;">
                                        <span class="fa fa-folder-open" style="outline: none; cursor: inherit;"></span>
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">your current project</a>
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
                                        <a href="single.html" class="editContent" style="outline: none; cursor: inherit;font-weight: bold;">create a Project-Group</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        function categories(){
                        var show = document.getElementById("categories");
                        if(show.style.display = "none"){
                            show.style.display = "block";
                        }
                        else{
                            show.style.display = "none";
                        }
                        }
                    </script>