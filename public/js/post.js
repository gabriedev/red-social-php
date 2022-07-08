let getTriggerPost = document.getElementById('post_publish_content');
let postTrigger = document.getElementById('public_post');
getTriggerPost.addEventListener('submit', e => {
    event.preventDefault();
    if (postTrigger.value.length > 0) {
        let postRequest = new XMLHttpRequest();
        postRequest.open('POST', '/redsocial/post/addPost');
        let formData = new FormData(getTriggerPost)
        postRequest.send(formData);

        postRequest.onload = function () {
            console.log(postRequest.response);
        }
    }
})

window.addEventListener('load', function () {

    showPosts();


    function showPosts() {
        let postRequest = new XMLHttpRequest();
        postRequest.open('POST', '/redsocial/post/showPosts');
        postRequest.send()
        let getContainerPosts = document.getElementById('show_posts');

        postRequest.onload = function () {
            let respon = postRequest.response;
        }
    }

})





/*
for (let i = 0; i < getPosts.length; i++) {

    let cardPost = `
    <article class="post_design">
    <div class="post_header">
        <div class="post_information">
            <a href="#" class="setting-item-post">
                <div class="icon-item">
                    <img src="https://picsum.photos/60/60" class="image-post-drop">
                </div>
                <div class="display-name-setting">
                    <span>${getPosts[i]['username']}</span>
                    <sub>${getPosts[i]['post_date']}</sub>
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
            <p>${getPosts[i]['post_content']}</p>
        </div>
        <div class="post-body-content">
            <img src="https://localhost/${getPosts[i]['post_image']}" class="image_post_design">
            <div class="post_comment_body">
                <a href="javascript:void(0);" class="small-fab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                </a>
            </div>
            <div class="post_reaction">
                <div class="likes likeButton">
                    <a href="javascript:void(0)" class="" style="position: absolute"><img src="https://localhost/redsocial/img/reactions/like1.png" class="image_like"></a>

                    <div class="reactions" data-set="${getPosts[i]['post_content']}">
                        <a href="javscript:void()" class="reaction-item">
                            <img src="https://localhost/redsocial/img/reactions/like.gif" accesskey="like">
                        </a>
                        <a href="javscript:void()" class="reaction-item">
                            <img src="https://localhost/redsocial/img/reactions/love.gif" accesskey="love">
                        </a>
                        <a href="javscript:void()" class="reaction-item">
                            <img src="https://localhost/redsocial/img/reactions/sad.gif" accesskey="sad">
                        </a>
                        <a href="javscript:void()" class="reaction-item">
                            <img src="https://localhost/redsocial/img/reactions/sorprendido.gif" accesskey="wow">
                        </a>
                        <a href="javscript:void()" class="reaction-item">
                            <img src="https://localhost/redsocial/img/reactions/risa.gif" accesskey="haha">
                        </a>
                        <a href="javscript:void()" class="reaction-item">
                            <img src="https://localhost/redsocial/img/reactions/angry.gif" accesskey="angry">
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
    `;
    getContainerPosts.innerHTML += cardPost;

    likeButtonComponent();
    dropDown();
}

*/