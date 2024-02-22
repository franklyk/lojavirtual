
const formLogin = document.getElementById('form-login');
if (formLogin) {
    formLogin.addEventListener("submit", async (e) => {
        var email = document.querySelector('#email').value;
        if (email === "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário preencher campo E-mail!</p>";
            setTimeout(() => {
                document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
            }, 3000);
            return;
        } else {
            document.getElementById("msg").innerHTML = "<p></p>";
        }

        var password = document.querySelector('#password').value;
        if (password === "") {
            e.preventDefault();
            document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário preencher campo Senha!</p>";
            setTimeout(() => {
                document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
            }, 2000);
            return;
        } else {
            document.getElementById("msg").innerHTML = "<p></p>";
        }


    })
}
