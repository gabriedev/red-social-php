// Like Button Component

function likeButtonComponent() {
    
    let getButtonLike = document.querySelectorAll('.likes');
    let getContainerReaction = document.querySelectorAll('.reactions');
    if (getContainerReaction) {
        for (let i = 0; i < getContainerReaction.length; i++) {
            getContainerReaction[i].style.display = "none";
            for (let b = 0; b < getButtonLike.length; b++) {
                getButtonLike[b].addEventListener('mouseover', e => {

                    if (e.target.parentNode.className == "reaction-item") {
                        e.target.parentNode.addEventListener('click', ea => {
                            event.preventDefault();
                            switch (ea.target.attributes[1].value) {
                                case 'like':
                                    ea.target.parentNode.parentNode.parentNode.children[0].innerHTML = '<img src="http://localhost/redsocial/img/reactions-emojis/like.png" class="image_like">';
                                    post_id = ea.target.parentNode.parentNode.attributes[1].value;
                                    console.log(post_id);
                                    break;
                                case 'sad':
                                    ea.target.parentNode.parentNode.parentNode.children[0].innerHTML = '<img src="http://localhost/redsocial/img/reactions-emojis/sad.png" class="image_like">';
                                    post_id = ea.target.parentNode.parentNode.attributes[1].value;
                                    console.log(post_id);
                                    break;
                                case 'wow':
                                    ea.target.parentNode.parentNode.parentNode.children[0].innerHTML = '<img src="http://localhost/redsocial/img/reactions-emojis/wow.png" class="image_like">';
                                    post_id = ea.target.parentNode.parentNode.attributes[1].value;
                                    console.log(post_id);
                                    break;
                                case 'angry':
                                    ea.target.parentNode.parentNode.parentNode.children[0].innerHTML = '<img src="http://localhost/redsocial/img/reactions-emojis/angry.png" class="image_like">';
                                    post_id = ea.target.parentNode.parentNode.attributes[1].value;
                                    console.log(post_id);
                                    break;
                                case 'haha':
                                    ea.target.parentNode.parentNode.parentNode.children[0].innerHTML = '<img src="http://localhost/redsocial/img/reactions-emojis/haha.png" class="image_like">';
                                    post_id = ea.target.parentNode.parentNode.attributes[1].value;
                                    console.log(post_id);
                                    break;
                                case 'love':
                                    ea.target.parentNode.parentNode.parentNode.children[0].innerHTML = '<img src="http://localhost/redsocial/img/reactions-emojis/love.png" class="image_like">';
                                    post_id = ea.target.parentNode.parentNode.attributes[1].value;
                                    console.log(post_id);
                                    break;
                            }
                        })
                    }
                    getButtonLike[b].children[1].style.display = "flex";
                });

                getButtonLike[b].addEventListener('click', ex => {
                    if (ex.target.parentNode != null) {
                        if (ex.target.parentNode.className != "reaction-item") {
                            if (ex.target.parentNode.className == "active") {
                                ex.target.parentNode.className = "";
                                ex.target.parentNode.innerHTML = '<img src="http://localhost/redsocial/img/reactions/like1.png" class="image_like">';
                                post_id = getButtonLike[b].children[1].attributes[1].value;
                                console.log(post_id);
                            } else {
                                ex.target.parentNode.className = "active";
                                let containerClassNew = `
                                <img src="http://localhost/redsocial/img/reactions-emojis/like.png" class="image_like">
                                `;
                                ex.target.parentNode.innerHTML = containerClassNew;

                                post_id = getButtonLike[b].children[1].attributes[1].value;
                                console.log(post_id);
                            }
                        }
                    }

                    event.preventDefault();
                })

                getButtonLike[b].addEventListener('mouseout', function () {
                    getButtonLike[b].children[1].style.display = "none";
                });
            }
        }
    }
}
// Like Button Component

// Wheater Component
function wheaterComponent() {
    let getUserInfo = new XMLHttpRequest();
    getUserInfo.open('GET', 'http://api6.ipify.org?format=json');
    getUserInfo.send();

    getUserInfo.onload = function () {
        let userInfo = JSON.parse(getUserInfo.response);

        let requestInfo = new XMLHttpRequest();
        requestInfo.open('GET', 'http://ipapi.co/' + userInfo['ip'] + '/json/');
        requestInfo.send();
        requestInfo.onload = function () {
            let userInfoXd = JSON.parse(requestInfo.response);
            let dataUser = {
                city: userInfoXd['city'],
                region: userInfoXd['region'],
                country: userInfoXd['country_code'],
                key: '&APPID=767a7cce68ed2b3098d41e24364ec56c',
            };
            let urlRequest = dataUser['city'] + ',' + dataUser['region'] + ',' + dataUser['country'] + dataUser['key'];

            let requestWeather = new XMLHttpRequest();
            requestWeather.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=' + urlRequest);
            requestWeather.send();

            requestWeather.onload = function () {
                let weatherData = JSON.parse(requestWeather.response);
                let date = new Date;
                switch (date.getDay()) {
                    case 1:
                        actualDay = 'Monday';
                        break;
                    case 2:
                        actualDay = 'Tuesday';
                        break;
                    case 3:
                        actualDay = 'Wednesday';
                        break;
                    case 4:
                        actualDay = 'Thursday';
                        break;
                    case 5:
                        actualDay = 'Friday';
                        break;
                    case 6:
                        actualDay = 'Saturday';
                        break;
                    case 0:
                        actualDay = 'Sunday';
                        break;
                }

                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                if (Math.round(weatherData['main']['temp'] - 273.15) + 2 > 20) {
                    color = 'sunny';
                    dayInfo = {
                        icon: 'sun.png',
                        name: 'Sunny'
                    };
                } else {
                    color = 'cold';
                    dayInfo = {
                        icon: 'cold.png',
                        name: 'Cold'
                    };
                }

                let finalWeather = {
                    cardColor: color,
                    city: userInfoXd['city'],
                    region: userInfoXd['region'],
                    country: userInfoXd['country_name'],
                    temperature: (Math.round((parseFloat(weatherData['main']['temp']) - 273)) + 2) + '°',
                    info: dayInfo,
                    actualDayName: actualDay,
                    actualDay: date.getDate(),
                    actualMonth: months[date.getMonth()],
                    actualYear: date.getFullYear()
                };

                let containerWeater = `
                <div class="weather_witget ${finalWeather['cardColor']}">
                    <div class="container-widget-weater">
                        <p class="show_temp m-0">${finalWeather['temperature']}</p>
                        <img class="icon_cart_weather" src="http://localhost/redsocial/img/${finalWeather['info']['icon']}">
                        <p class="weather_withe">${finalWeather['info']['name']}</p>
                        <p class="weather_region">${finalWeather['actualDayName']}, ${finalWeather['actualDay']} - ${finalWeather['actualYear']}</p>
                        <p class="weather_country">${finalWeather['city']} , ${finalWeather['region']}</p>
                    </div>
                </div>
                `;

                document.getElementById("weather_witget").innerHTML = containerWeater;
            }
        }
    }
}
// Wheater Component

// Dropdow Component
function dropDown() {
    let dropId = document.querySelectorAll('.drop_action_post');

    for (let i = 0; i < dropId.length; i++) {
        dropId[i].addEventListener('focus', e => {
            let getVarDataSet = e.target.attributes[1].value;
            let getContainerDrop = e.target.parentNode.children[1];
            let containerCard = `
                <div class="drop-container">
            
                </div>
            `;

            console.log(getVarDataSet)

            getContainerDrop.innerHTML = containerCard
        });

        dropId[i].addEventListener('blur', e => {
            let getContainerDrop = e.target.parentNode.children[1];
            getContainerDrop.innerHTML = ''
        });
    }

}
// Dropdow Component

// DropDown Profile
function dropDownProfile() {
    let getContainerButtonTrigger = document.getElementById("drop_action_profile");
    let getDropProfile = document.querySelector('.drop-content-profile');
    getContainerButtonTrigger.addEventListener('focus', e => {
        getDropProfile.style.display = "block"
    })

    getContainerButtonTrigger.addEventListener('blur', e => {
        getDropProfile.style.display = "none"
    })
}
// DropDown Profile

// Frieds requests
function friends_request() {
    let getTriggerFriendsRequest = document.querySelector('.friends_request');
    let getHeartTrigger = document.querySelector('.feather-heart');
    let getContainerNotifications = document.getElementById('friend_requests');
    getTriggerFriendsRequest.addEventListener('mouseover', e => {
        getHeartTrigger.attributes[4].value = '#fff'
    })

    getTriggerFriendsRequest.addEventListener('mouseout', e => {
        getHeartTrigger.attributes[4].value = 'none'
    })

    getTriggerFriendsRequest.addEventListener('focus', e => {
        getTriggerFriendsRequest.className += ' active_friends_request'
        getHeartTrigger.attributes[4].value = '#fff';
        let containerCards = `
        <div class="drop-container-messages">
            <div class="header_message_modal">
                <span>Messages</span>
                <a href="javascript:void(0)">Inbox</a>
            </div>
            <ul class="messages_list">
                <li class="messages_list_item">
                    <div class="image_drop_prof">
                        <img src="http://picsum.photos/60/60" class="drop_image_round">
                    </div>
                    <div class="info_drop">
                        <span>Andres Calle</span>
                        <sub>Do you remember me? i saw you in the train station</sub>
                    </div>
                    <div class="message_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    </div>
                </li>
            </ul>
        </div>
    `;
        getContainerNotifications.innerHTML = containerCards;
    })

    getTriggerFriendsRequest.addEventListener('blur', e => {
        getTriggerFriendsRequest.className = 'navbar_action friends_request'
        getHeartTrigger.attributes[4].value = 'none';
        getContainerNotifications.innerHTML = "";
    })
}
// Frieds requests

// Notification
function notifications() {
    let getTriggerFriendsRequest = document.querySelector('.notifications');
    let getHeartTrigger = document.querySelector('.feather-bell');
    let getContainerNotifications = document.getElementById('notifications');


    getTriggerFriendsRequest.addEventListener('focus', e => {
        console.log(e)
        getTriggerFriendsRequest.className += ' active_notifications_blue'
        let containerCards = `
        <div class="drop-container-messages">
            <div class="header_message_modal">
                <span>Messages</span>
                <a href="javascript:void(0)">Inbox</a>
            </div>
            <ul class="messages_list">
                <li class="messages_list_item">
                    <div class="image_drop_prof">
                        <img src="http://picsum.photos/60/60" class="drop_image_round">
                    </div>
                    <div class="info_drop">
                        <span>Andres Calle</span>
                        <sub>Do you remember me? i saw you in the train station</sub>
                    </div>
                    <div class="message_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    </div>
                </li>
            </ul>
        </div>
    `;
        getContainerNotifications.innerHTML = containerCards;
    })

    getTriggerFriendsRequest.addEventListener('blur', e => {
        getTriggerFriendsRequest.className = 'navbar_action notifications'
        getContainerNotifications.innerHTML = "";
    })
}
// Notifications

// Messages
function messages() {
    let getTriggerMessages = document.querySelector('.messages');
    let getContainerMessages = document.getElementById('messages');
    getTriggerMessages.addEventListener('focus', e => {

        getTriggerMessages.className += ' active_notifications_blue'
        let containerCard = `
                <div class="drop-container-messages">
                    <div class="header_message_modal">
                        <span>Messages</span>
                        <a href="javascript:void(0)">Inbox</a>
                    </div>
                    <ul class="messages_list">
                        <li class="messages_list_item">
                            <div class="image_drop_prof">
                                <img src="http://picsum.photos/60/60" class="drop_image_round">
                            </div>
                            <div class="info_drop">
                                <span>Andres Calle</span>
                                <sub>Do you remember me? i saw you in the train station</sub>
                            </div>
                            <div class="message_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                            </div>
                        </li>
                    </ul>
                </div>
            `;
        getContainerMessages.innerHTML = containerCard;
    })

    getTriggerMessages.addEventListener('blur', e => {
        getTriggerMessages.className = 'navbar_action messages';
        getContainerMessages.innerHTML = '';
    })
}
// Messages

// messenger
function messenger() {
    let getTriggerEventMessenger = document.getElementById("messenger_trigger");
    let getMessengerContainer = document.getElementById("messenger");
    let closeMessengerTrigger = document.getElementById("close_messenger");
    let getHtmlTag = document.querySelector('html');
    let active_user_chat = document.getElementById('active_user_chat');
    let getFriendsList = document.querySelector('.friends_list');



    getTriggerEventMessenger.addEventListener('click', e => {
        getMessengerContainer.style.display = "flex";
        getMessengerContainer.className += " is_animation_messenger";
        getHtmlTag.style.overflow = "hidden";

        getFriendsList.innerHTML = `
            <li class="friends_list_item">
                <a href="javascript:void(0)" class="action_select_user" data-set="4"><img src="http://picsum.photos/60/60" class="image_user_item"></a>
            </li>
            <li class="friends_list_item">
                <a href="javascript:void(0)" class="action_select_user" data-set="24"><img src="http://picsum.photos/60/60" class="image_user_item"></a>
            </li>
        `;

        let getUsersList = document.querySelectorAll('.action_select_user');

        for (let u = 0; u < getUsersList.length; u++) {
            getUsersList[u].addEventListener('click', e => {
                let userGetId = e.target.parentNode.attributes[2].value;
                console.log(userGetId)
                let containUser = ``;
                if (userGetId == 4) {
                    containUser = `
                    <a href="#" class="setting-item">
                        <div class="icon-item">
                            <img src="http://picsum.photos/60/60" class="image-page-drop">
                        </div>
                        <div class="display-name-setting">
                            <span>Kismu</span>
                            <sub>Online</sub>
                        </div>
                    </a>
                    `;
                } else if (userGetId == 24) {
                    containUser = `
                    <a href="#" class="setting-item">
                        <div class="icon-item">
                            <img src="http://picsum.photos/60/60" class="image-page-drop">
                        </div>
                        <div class="display-name-setting">
                            <span>Mateo</span>
                            <sub>Offline</sub>
                        </div>
                    </a>
                    `;
                }


                active_user_chat.innerHTML = containUser;
            })
        }
    })

    closeMessengerTrigger.addEventListener('click', e => {
        getHtmlTag.style.overflow = "visible";
        getMessengerContainer.style.display = "none";
    })
}
// messenger

// explore
function explore() {
    let exploreTrigger = document.getElementById('explore_options');
    let getHtmlTag = document.querySelector('html');
    let getExploreContainer = document.getElementById('explore');
    let getCloseTrigger = document.getElementById('close_trigger')

    exploreTrigger.addEventListener('click', e => {
        getHtmlTag.style.overflow = "hidden";
        getExploreContainer.style.display = 'flex';
        getExploreContainer.className += ' is_to_active'
    })

    getCloseTrigger.addEventListener('click', function () {
        getHtmlTag.style.overflow = "visible";
        getExploreContainer.style.display = 'none';
        getExploreContainer.className = 'explore';
    })
}
// explore

// Search People
function search_people() {
    let getSearchTrigger = document.getElementById('search_people');
    let getSearchSuggest = document.getElementById('search_suggest')
    getSearchTrigger.addEventListener('keyup', e => {


        if (getSearchTrigger.value.length > 3) {
            let cardSearch = `
                    <ul class="search_list">
                        <li class="search_list_item">
                            <a href="">
                                <img src="http://picsum.photos/60/60" class="search_image">
                                <span>Kismu</span>
                            </a>
                        </li>
                        <li class="search_list_item">
                            <a href="">
                                <img src="http://picsum.photos/60/60" class="search_image">
                                <span>Mateo</span>
                            </a>
                        </li>
                    </ul>
                `;

            getSearchSuggest.innerHTML = cardSearch

            if (getSearchTrigger.value.length <= 0) {
                getSearchSuggest.style.display = 'none';
                getSearchTrigger.value = ""
            }
        } else {
            getSearchSuggest.style.display = 'flex'
            getSearchSuggest.innerHTML = 'Search ' + getSearchTrigger.value

            if (getSearchTrigger.value.length <= 0) {
                getSearchSuggest.style.display = 'none'
                getSearchTrigger.value = ""
            }
        }
    })

    getSearchTrigger.addEventListener('blur', e => {
        getSearchSuggest.style.display = 'none';
        getSearchTrigger.value = ""
    })
}
// Search people

// Post Component
function post() {
    let postTrigger = document.getElementById('public_post');
    let getShadow = document.getElementById('shadow_content');
    let getClosePost = document.getElementById('close_post');
    let getMoreButtons = document.getElementById('more_options_post');
    let getPublishButton = document.getElementById('publish_post');
    let getMoreButton = document.getElementById('more_button');
    let getMoreTrigger = document.getElementById('more_information')

    getMoreButton.addEventListener('focus', e => {
        getMoreTrigger.style.display = 'block'
    })

    getMoreButton.addEventListener('blur', e => {
        getMoreTrigger.style.display = 'none'
    })

    postTrigger.addEventListener('focus', e => {
        getShadow.style.backgroundColor = "rgba(0, 0, 0, 0.32)"
        getShadow.style.display = "flex";
        getClosePost.style.display = "block";
        getMoreButtons.style.display = 'flex';
    })

    postTrigger.addEventListener('keyup', e => {
        if (postTrigger.value.length > 0) {
            getPublishButton.className = ""
            getPublishButton.style.cursor = "pointer"
        } else {
            getPublishButton.className = "is_disabled"
            getPublishButton.style.cursor = "inherit";
        }
    })

    getClosePost.addEventListener('click', function () {
        getShadow.style.display = "none";
        getClosePost.style.display = "none"
        getMoreButtons.style.display = 'none'
    })
}
// Post Component

function mobileMenu() {
    let getTriggerMobileMenu = document.getElementById('trigger_mobile');
    let getProfileContainer = document.getElementById('mobile_content');

    getTriggerMobileMenu.addEventListener('focus', e => {
        cardContent = `
            <div class="setRotate">
                <div class="x1"></div>
                <div class="x2"></div>
            </div>
        `;
        setTimeout(function () {
            getTriggerMobileMenu.innerHTML = cardContent
            getProfileContainer.style.display = 'flex'
            getProfileContainer.className = "is_active_mobile_menu";

        }, 350)
    })

    getTriggerMobileMenu.addEventListener('blur', e => {
        cardContent = `
            <div class="r1"></div>
            <div class="r2"></div>
            <div class="r3"></div>
        `;

        getProfileContainer.style.display = 'none'
        getProfileContainer.className = ""
        getTriggerMobileMenu.innerHTML = cardContent
    })


}