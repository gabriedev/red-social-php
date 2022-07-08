<?php
include_once URL_APP . '/views/assets/head.php';
include_once URL_APP . '/views/assets/navbar.php';
?>

<div id="tabs">

</div>

<div id="container-ui">





    <h2>Weather Component</h2>

    <!-- Weather component  -->
    <div id="weather_witget">
    </div>
    <!-- Weather component  -->

    <br>

    <h2>DropDown Post</h2>

    <!-- DropDown Post -->
    <div class="dropdown">
        <button class="drop_action_post" accesskey="1">
            <span class="drop_action_item"></span>
            <span class="drop_action_item"></span>
            <span class="drop_action_item"></span>
        </button>
        <div class="drop-content"></div>
    </div>
    <!-- DropDown -->

    <br>

    <h2>DropDown Profile</h2>

    <!-- DropDown Post -->
    <div class="dropdown">
        <button id="drop_action_profile">
            <img src="https://picsum.photos/60/60" class="image-profile-drop">
        </button>
        <div class="drop-content-profile">
            <div class="header-prof-drop">
                <span class="active_name">Kismu</span>
                <a href="" class="go-to-profile">Profile</a>
            </div>

            <div class="main-account separator-item">
                <a href="#" class="setting-item">
                    <div class="icon-item">
                        <img src="https://picsum.photos/60/60" class="image-page-drop">
                    </div>
                    <div class="display-name-setting">
                        <span>Kismu</span>
                        <sub>Main account</sub>
                    </div>
                </a>
            </div>

            <div class="other-accounts separator-item">
                <a href="#" class="setting-item">
                    <div class="icon-item">
                        <img src="https://picsum.photos/60/60" class="image-page-drop">
                    </div>
                    <div class="display-name-setting">
                        <span>Kismu</span>
                        <sub>Company page</sub>
                    </div>
                </a>
                <div class="setting-item">
                    <div id="create-page">
                        <span>Create page</span>
                    </div>
                </div>
            </div>

            <div class="settings-account">
                <a href="#" class="setting-item">
                    <div class="icon-item">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="display-name-setting">
                        <span>Settings</span>
                        <sub>Access settings</sub>
                    </div>
                </a>
                <a href="#" class="setting-item">
                    <div class="icon-item">
                        <i class="fas fa-power-off"></i>
                    </div>
                    <div class="display-name-setting">
                        <span>Log out</span>
                        <sub>Log out from yout account</sub>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- DropDown -->

    <h2>Friend request</h2>

    <!-- Friends request -->
    <button class="navbar_action friends_request">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
        </svg>
        <div id="friend_requests"></div>
    </button>
    <!-- Friends request -->

    <h2>Is friend request</h2>

    <!-- Friends request -->
    <button class="navbar_action friends_request is_notification_red">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
        </svg>
    </button>
    <!-- Friends request -->

    <h2>Notifications</h2>

    <!-- Friends request -->
    <button class="navbar_action notifications">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
        </svg>

        <!-- notifications Modal -->
        <div id="notifications"></div>
        <!-- notifications Modal -->
    </button>
    <!-- Friends request -->


    <h2>Is notification</h2>

    <!-- Friends request -->
    <button class="navbar_action notifications is_notification_blue">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
        </svg>
    </button>
    <!-- Friends request -->

    <h2>Messages</h2>
    <!-- Messages -->
    <button class="navbar_action messages">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
        </svg>
        <!-- Messages Modal -->
        <div id="messages"></div>
        <!-- Messages Modal -->
    </button>
    <!-- Messages -->


    <h2>Is messages</h2>
    <!-- Messages -->
    <button class="navbar_action messages is_notification_blue">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
        </svg>
    </button>
    <!-- Messages -->

    <h2>Messenger</h2>
    <!-- Messenger -->
    <button id="messenger_trigger" class="navbar_action">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
    </button>
    <!-- Messenger -->
    <!-- Messenger modal -->
    <div id="messenger">
        <div class="messenger_row">
            <div id="messenger_friends">
                <div class="logo_social_network">

                </div>
                <ul class="friends_list">

                </ul>
            </div>

            <div id="messenger_navbar">
                <div id="active_user_chat"></div>
                <div class="options_messenger">
                    <div id="close_messenger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </div>
            </div>
            <div id="messenger_reaction_content">
                <div id="messenger_chat">

                </div>
                <div id="messenger_user_details">

                </div>
            </div>

        </div>
    </div>
    <!-- Messenger modal -->

    <h2>Feed Options</h2>

    <!-- Explore Component -->
    <div id="explore_options" class="navbar_action">
        <i class="mdi mdi-apps"></i>
    </div>
    <div id="explore">
        <div id="close_trigger">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </div>

        <div id="explore_content">
            <h3>Explore</h3>
            <div class="explore_list">

                <a href="#" class="explore-item">
                    <img src="<?php echo URL_PROJECT ?>/img/explore/clover.svg" class="explore_img">
                    <span class="m-1">Feed</span>
                </a>

                <a href="#" class="explore-item">
                    <img src="<?php echo URL_PROJECT ?>/img/explore/friends.svg" class="explore_img">
                    <span class="m-1">Friends</span>
                </a>

                <a href="#" class="explore-item">
                    <img src="<?php echo URL_PROJECT ?>/img/explore/tag-euro.svg" class="explore_img">
                    <span class="m-1">Pages</span>
                </a>

            </div>
        </div>
    </div>
    <!-- Explore component -->

    <h2>Search people</h2>
    <!-- Search Input  -->
    <div class="search_people">
        <div class="search_icon">
            <i class="fas fa-search"></i>
        </div>
        <input type="text" name="search_people" id="search_people" placeholder="Search">

        <div id="search_suggest"></div>
    </div>
    <!-- Search Input -->

    <h2>Public post</h2>

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

                    <!-- <div id="activity_trigger" class="media_post">
                        <img src="<?php echo URL_PROJECT ?>/img/emoji-1.svg" class="emoji_post">
                        <span>activity</span>
                    </div> -->

                </div>

                <div id="more_options_post">
                    <div class="buttons">
                        <button id="more_button">
                            <span>More</span>
                            <div id="more_information">
                                <div class="item_more"><span>Create group</span></div>
                            </div>
                        </button>
                        <div id="publish_post" class="is_disabled">Publish</div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <h2>Post Design</h2>
    <article class="post_design">
        <div class="post_header">
            <div class="post_information">
                <a href="#" class="setting-item-post">
                    <div class="icon-item">
                        <img src="https://picsum.photos/60/60" class="image-post-drop">
                    </div>
                    <div class="display-name-setting">
                        <span>Settings</span>
                        <sub>Access settings</sub>
                    </div>
                </a>
            </div>
            <div class="post_options">
                <div class="dropdown">
                    <button class="drop_action_post" accesskey="1">
                        <span class="drop_action_item"></span>
                        <span class="drop_action_item"></span>
                        <span class="drop_action_item"></span>
                    </button>
                    <div class="drop-content"></div>
                </div>
            </div>
        </div>

        <div class="post-body">
            <div class="post-body-header-content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore sapiente eos corrupti rem ipsum vel, consequuntur assumenda voluptas quaerat.</p>
            </div>
            <div class="post-body-content">
                <img src="https://picsum.photos/600/600" class="image_post_design">
                <div class="post_comment_body">
                    <a href="javascript:void(0);" class="small-fab">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                    </a>
                </div>
                <div class="post_reaction">
                    <div class="likes likeButton">
                        <a href="javascript:void(0)" class="" style="position: absolute"><img src="<?php echo URL_PROJECT . '/img/reactions/like1.png' ?>" class="image_like"></a>

                        <div class="reactions" data-set="1">
                            <a href="javscript:void()" class="reaction-item">
                                <img src="<?php echo URL_PROJECT . '/img/reactions/like.gif' ?>" accesskey="like">
                            </a>
                            <a href="javscript:void()" class="reaction-item">
                                <img src="<?php echo URL_PROJECT . '/img/reactions/love.gif' ?>" accesskey="love">
                            </a>
                            <a href="javscript:void()" class="reaction-item">
                                <img src="<?php echo URL_PROJECT . '/img/reactions/sad.gif' ?>" accesskey="sad">
                            </a>
                            <a href="javscript:void()" class="reaction-item">
                                <img src="<?php echo URL_PROJECT . '/img/reactions/sorprendido.gif' ?>" accesskey="wow">
                            </a>
                            <a href="javscript:void()" class="reaction-item">
                                <img src="<?php echo URL_PROJECT . '/img/reactions/risa.gif' ?>" accesskey="haha">
                            </a>
                            <a href="javscript:void()" class="reaction-item">
                                <img src="<?php echo URL_PROJECT . '/img/reactions/angry.gif' ?>" accesskey="angry">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post_footer_content">
                <div class="likes_count">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                    <span>13</span>
                </div>
                <div class="comments_count">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                    <span>25</span>
                </div>
            </div>
        </div>
    </article>

    <br>
    <br>
</div>





<?php
include_once URL_APP . '/views/assets/footer.php';
?>