getFromRe = document.getElementById("form_register");
if (getFromRe) {
    getFromRe.style.display = "None";
}

var getInputAnimationLabel = document.querySelectorAll(".form-control");
for (let i = 0; i < getInputAnimationLabel.length; i++) {
    getInputAnimationLabel[i].addEventListener("blur", e => {
        let labelInputAnime = e.target.parentNode.children[0];
        if (labelInputAnime.classList[1] == 'animateLabel' && e.target.value == "") {
            labelInputAnime.className = "labelInput";
        }
    })

    getInputAnimationLabel[i].addEventListener("focus", e => {
        let labelInputAnime = e.target.parentNode.children[0];
        if (labelInputAnime.classList[1] != 'animateLabel') {
            labelInputAnime.className += " animateLabel";
        }
    })
}

var getSwitchForm = document.querySelector(".switch_form");
if (getSwitchForm) {
    getSwitchForm.addEventListener("click", e => {
        let containerLogin = document.getElementById("activateLogin");
        let containerRegister = document.getElementById("activateRegister");

        if (e.target.id == "activateLogin") {
            if (containerLogin.classList[2] != "activate_switch") {
                containerLogin.className += " activate_switch";
                containerRegister.className = "register_switch certer_objets";
            }
        } else {
            if (containerRegister.classList[2] != "activate_switch") {
                containerRegister.className += " activate_switch";
                containerLogin.className = "login_switch certer_objets";
            }
        }

        if (e.target.id == "activateLogin") {
            let containerRegisterForm = document.getElementById("form_register");
            let containerLoginForm = document.getElementById("form_login");
            containerRegisterForm.className += " slideLeft";
            let effectInterval = setInterval(function () {
                containerRegisterForm.className = "form-custom";
                containerRegisterForm.style.display = "none";
                containerLoginForm.style.display = "block";
                window.clearInterval(effectInterval)
            }, 1000);
        } else {

            let containerRegisterForm = document.getElementById("form_register");
            let containerLoginForm = document.getElementById("form_login");
            containerLoginForm.className += " slideRight";
            let effectInterval = setInterval(function () {
                containerLoginForm.className = "form-custom";
                containerLoginForm.style.display = "none";
                containerRegisterForm.style.display = "block";
                window.clearInterval(effectInterval)
            }, 1000);
        }
    });

    var getFormRegister = document.getElementById("registerFormSend");
    getFormRegister.addEventListener("submit", e => {
        event.preventDefault();
        var confim = true;

        function conEmail() {
            return new Promise((resolve, reject) => {
                let userEmail = e.target.elements[0].value;
                let requestEmail = new XMLHttpRequest();
                requestEmail.open('POST', '/redsocial/auth/comfirmEmail');
                requestEmail.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                requestEmail.send('email=' + userEmail);

                requestEmail.onload = function () {
                    responseEmail = requestEmail.response
                    if (responseEmail == "") {
                        resolve(userEmail);
                    } else {
                        reject("email")
                    }
                }
            })
        }

        function conUser() {
            return new Promise((resolve, reject) => {
                let username = e.target.elements[1].value;
                let requestUsername = new XMLHttpRequest();
                requestUsername.open('POST', '/redsocial/auth/confirmUsername');
                requestUsername.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
                requestUsername.send('user=' + username);

                requestUsername.onload = function () {
                    responseUsername = requestUsername.response;
                    if (responseUsername == "") {
                        return resolve(username);
                    } else {
                        return reject("user");
                    }
                }
            })
        }

        function conPassword() {
            return new Promise((resolve, reject) => {
                let password = e.target.elements[2].value;
                let passwordConfirm = e.target.elements[3].value;
                let requestPassword = new XMLHttpRequest();
                requestPassword.open('POST', '/redsocial/auth/confirmPassword');
                requestPassword.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
                requestPassword.send('password=' + password + '&passwordConfirm=' + passwordConfirm);

                requestPassword.onload = function () {
                    responsePassword = requestPassword.response;
                    if (responsePassword == 1) {
                        return resolve(password);
                    } else {
                        return reject('password');
                    }
                }
            })
        }

        var arrayDataParams = [];

        function arrayData(param) {
            arrayDataParams.push(param);
        }

        function addUser(data) {
            let requestAddUser = new XMLHttpRequest();
            requestAddUser.open('POST', '/redsocial/auth/addUser');
            requestAddUser.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            requestAddUser.send('email=' + data[0] + '&user=' + data[1] + '&password=' + data[2]);

            requestAddUser.onload = function () {
                if (requestAddUser.response == 1) {
                    e.target.elements[0].value = "";
                    e.target.elements[1].value = "";
                    e.target.elements[2].value = "";
                    e.target.elements[3].value = "";
                    document.getElementById("form_register").style.display = "None";
                    document.getElementById("form_login").style.display = "block";
                }
            }
        }

        conEmail()
            .then(data => {
                arrayData(data)
                changeColorSuccess('emailRegister', 'input');
                document.getElementById('alertRegisterEmail').innerHTML = "";
                return conUser(data);
            }).then(data => {
                arrayData(data)
                changeColorSuccess('usernameRegister', 'input');
                document.getElementById('alertRegisterUsername').innerHTML = "";
                return conPassword(data);
            }).then(data => {
                arrayData(data)
                changeColorSuccess('passwordRegister', 'input');
                changeColorSuccess('passwordRegisterConfirm', 'input');
                document.getElementById('alertRegisterPassword').innerHTML = "";
                addUser(arrayDataParams)
            })
            .catch(data => {

                if (data == 'email') {
                    changeColorDanger('emailRegister', 'input');
                    document.getElementById('alertRegisterEmail').innerHTML = "El email ya se encuentra en uso";
                } else if (data == 'user') {
                    changeColorDanger('usernameRegister', 'input');
                    document.getElementById('alertRegisterUsername').innerHTML = "El usuario ya se encuentra en uso";
                } else {
                    changeColorDanger('passwordRegister', 'input');
                    changeColorDanger('passwordRegisterConfirm', 'input');
                    document.getElementById('alertRegisterPassword').innerHTML = "Las contraseñas no coinciden";
                }
            })
    })

    function changeColorDanger(field, type) {
        getFielId = document.getElementById(field);
        if (type == 'input') {
            getFielId.style.borderBottom = "1px solid red";
            getFielId.style.color = "red";
            getFielId.parentNode.children[0].style.color = "red";
            getFielId.parentNode.parentNode.children[0].children[0].style.color = "red";
        }
    }

    function changeColorSuccess(field, type) {
        getFielId = document.getElementById(field);
        if (type == 'input') {
            getFielId.style.borderBottom = "1px solid #2ED197";
            getFielId.style.color = "#2ED197";
            getFielId.parentNode.children[0].style.color = "#2ED197";
            getFielId.parentNode.parentNode.children[0].children[0].style.color = "#2ED197";
        }
    }

    var getFormLogin = document.getElementById("loginFormSend");
    getFormLogin.addEventListener('submit', e => {
        event.preventDefault();

        let username = e.target.elements[0].value;
        let password = e.target.elements[1].value;

        let loginRequest = new XMLHttpRequest();
        loginRequest.open('POST', '/redsocial/auth/login');
        loginRequest.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
        loginRequest.send('user=' + username + '&password=' + password);

        loginRequest.onload = function () {
            let responseLogin = JSON.parse(loginRequest.response);
            if (responseLogin[1] == 'false') {
                let alertDanger = `
                    <div class="form-group">
                        <div class='alert-danger'>${responseLogin[0]}</div>
                    </div>
                    
                `;

                changeColorDanger('usernameLogin', 'input');
                changeColorDanger('passwordLogin', 'input');

                let getContainerAlert = document.getElementById("alertLogin").innerHTML = alertDanger
            } else {
                let alertDanger = `
                    <div class="form-group">
                        <div class='alert-success'>${responseLogin[0]}</div>
                    </div>
                `;
                changeColorSuccess('usernameLogin', 'input');
                changeColorSuccess('passwordLogin', 'input');

                let getContainerAlert = document.getElementById("alertLogin").innerHTML = alertDanger;

                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        }
    });
}

