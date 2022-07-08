<?php
include_once URL_APP . '/views/assets/head.php';
?>

<div class="background_custom_design">
    <div class="background">
        <img src="<?php echo URL_PROJECT . '/img/wave.png' ?>" alt="background imagen">

        <div class="over_background">
            <img src="<?php echo URL_PROJECT . '/img/background-bg.svg' ?>" alt="background over imagen">
        </div>
    </div>

</div>

<div class="container_auth certer_objets objets_colum">

    <div class="switch_form">
        <div id="activateLogin" class="login_switch certer_objets activate_switch">Login</div>
        <div id="activateRegister" class="register_switch certer_objets">Register</div>
    </div>

    <div class="header_form certer_objets">
        <img src="<?php echo URL_PROJECT . '/img/avatar.svg' ?>" alt="avatar">
    </div>

    <div class="container-modals-forms certer_objets objets_colum">
        <div id="form_login" class="form-custom">
            <form action="<?php echo URL_PROJECT ?>" id="loginFormSend" method="POST">
                <div class="form-group">
                    <div class="form-icon"><i class="fas fa-user"></i></div>
                    <div class="form-input">
                        <label for="usernameLogin" class="labelInput">Username</label>
                        <input type="text" name="usernameLogin" id="usernameLogin" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-icon"><i class="fas fa-key"></i></div>
                    <div class="form-input">
                        <label for="passwordLogin" class="labelInput">Password</label>
                        <input type="password" name="passwordLogin" id="passwordLogin" class="form-control" required>
                    </div>
                </div>
                <div id="alertLogin"></div>
                
                <div class="button-group certer_objets objets_colum">
                    <button class="btn btn-auth">Login</button>
                </div>

            </form>
        </div>

        <div id="form_register" class="form-custom">
            <form action="<?php echo URL_PROJECT?>" id="registerFormSend" method="POST">

            <div class="form-group">
                    <div class="form-icon"><i class="fas fa-envelope-open-text"></i></div>
                    <div class="form-input">
                        <label for="emailRegister" class="labelInput">Email</label>
                        <input type="email" name="emailRegister" id="emailRegister" class="form-control" required>
                    </div>
                    
                </div>
                <div id="alertRegisterEmail" class="alert-dan"></div>
                <div class="form-group">
                    <div class="form-icon"><i class="fas fa-user"></i></div>
                    <div class="form-input">
                        <label for="usernameRegister" class="labelInput">Username</label>
                        <input type="text" name="usernameRegister" id="usernameRegister" class="form-control" required>
                    </div>
                </div>
                <div id="alertRegisterUsername" class="alert-dan"></div>
                <div class="form-group">
                    <div class="form-icon"><i class="fas fa-key"></i></div>
                    <div class="form-input">
                        <label for="passwordRegister" class="labelInput">Password</label>
                        <input type="password" name="passwordRegister" id="passwordRegister" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-icon"><i class="fas fa-key"></i></div>
                    <div class="form-input">
                        <label for="passwordRegisterConfirm" class="labelInput">Confirm password</label>
                        <input type="password" name="passwordRegisterConfirm" id="passwordRegisterConfirm" class="form-control" required>
                    </div>
                    
                </div>
                <div id="alertRegisterPassword" class="alert-dan"></div>
                <div class="button-group certer_objets objets_colum">
                    <button class="btn btn-auth">Register</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php
include_once URL_APP . '/views/assets/footer.php';
