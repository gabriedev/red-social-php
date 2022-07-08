<?php
include_once URL_APP . '/views/assets/head.php';
include_once URL_APP . '/views/assets/navbar.php';



?>

<div class="container">
    <div class="row-container">
        <div class="col-3" id="left-sidebar">
            <!-- Weather component  -->
            <div id="weather_witget">
            </div>
            <!-- Weather component  -->
        </div>
        <div class="col-6" id="main-content">
            <div id="shadow_content"></div>
            <div class="public_post">
                <div id="close_post">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </div>
                <div class="tabs">
                    <div id="post_tab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                        <span>Publish</span>
                    </div>
                    <div class="other_tabs">
                        <div id="video_tab">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
                                <polygon points="23 7 16 12 23 17 23 7"></polygon>
                                <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                            </svg>
                            <span>Video</span>
                        </div>
                    </div>
                </div>

                <div class="tabs_content">

                    <div id="publish_content">
                        <form action="<?php echo URL_PROJECT ?>" id="post_publish_content" method="POST" enctype="multipart/form-data">
                            <div class="content_publish_post">
                                <div class="image_public_post">
                                    <img src="https://picsum.photos/60/60" class="image_profile_publish">
                                </div>


                                <div class="input_content_text">
                                    <textarea name="public_post" id="public_post" placeholder="Write something about you..."></textarea>
                                </div>
                            </div>

                            <div class="footer_publish_post">
                                <div class="media_post">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera">
                                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                        <circle cx="12" cy="13" r="4"></circle>
                                    </svg>
                                    <span>Media</span>
                                    <input type="file" name="upload_photos" id="upload_photos">
                                </div>
                            </div>

                            <div id="more_options_post">
                                <div class="buttons">
                                    <button id="more_button">
                                        <span>More</span>
                                        <div id="more_information">
                                            <div class="item_more"><span>Create group</span></div>
                                        </div>
                                    </button>
                                    <button id="publish_post" class="is_disabled">Publish</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div id="show_posts"></div>

            
        </div>
        <div class="col-3" id="right-sidebar"></div>
    </div>
</div>

<?php
include_once URL_APP . '/views/assets/footer.php';
?>