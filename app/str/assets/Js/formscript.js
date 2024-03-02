// window.alert ("carregou");
//Permitir o retorno do navegador ao formulário após erro
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

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
            }, 3000);
            return;
        } else {
            document.getElementById("msg").innerHTML = "<p></p>";
        }
    })
}

function inputFileValImg(){
    //Recebe o valor do campo
    var bannerBackground = document.querySelector('#banner_background')
    var filePath = bannerBackground.value;
    
    
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){

        bannerBackground.value = '';

        document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário selecionar uma imagem JPG ou PNG</p>";
        return;
    }else{
        previewImage(bannerBackground)
        document.getElementById("msg").innerHTML = "<p></p>";
        return
    }
}

function previewImage(new_image){
    console.log(new_image);

    if((new_image.files) && (new_image.files[0])){
        console.log(new_image.files);

        //new FileReader() Serve para ler o conteúdo do arquivo
        var reader = new FileReader();
        // onload (Dispara quando qualquer elemento tiver sido carregado)
        reader.onload = function(e){
            document.getElementById('view-image').innerHTML = "<img src='"+ e.target.result +"' alt='imagem'style='max-width: 100%; max-height: 100%'>"
        }

    }
    // readAsDataUrl - Retorna os dados do formato blob com uma URL de dados - Blob representa um arquivo
    reader.readAsDataURL(new_image.files[0]);
}


function showPass() {
    let password = document.getElementById('password');
    let btnShowPass = document.getElementById('eye-view-pass');

    if (password.type === 'password') {
        password.setAttribute('type', 'text');
        btnShowPass.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        password.setAttribute('type', 'password');
        btnShowPass.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

if ('#msg') {
    setTimeout(() => {
        document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
    }, 3000);
}

