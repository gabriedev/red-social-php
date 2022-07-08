<nav class="navbar">
    <div class="left-section">
        <div class="logo-section">
            <img src="<?php echo URL_PROJECT ?>/img/logo.png">
        </div>
        <div class="actions-section">
            <!-- Friends request -->
            <button class="navbar_action friends_request">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg>
                <div id="friend_requests"></div>
            </button>
            <!-- Friends request -->
            <!-- Notifications -->
            <button class="navbar_action notifications">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>

                <!-- notifications Modal -->
                <div id="notifications"></div>
                <!-- notifications Modal -->
            </button>
            <!-- Notifications -->
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
        </div>
    </div>
    <div id="desktop-menu" class="right-section">
        <div class="search-section">
            <!-- Search Input  -->
            <div class="search_people">
                <div class="search_icon">
                    <i class="fas fa-search"></i>
                </div>
                <input type="text" name="search_people" id="search_people" placeholder="Search">

                <div id="search_suggest"></div>
            </div>
            <!-- Search Input -->
        </div>
        <div class="profile-section">
            <!-- DropDown Profile -->
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
        </div>
    </div>

    <div id="mobile-menu">
        <button id="trigger_mobile">
            <div class="r1"></div>
            <div class="r2"></div>
            <div class="r3"></div>
        </button>
        <div id="mobile_content"></div>
    </div>
</nav>