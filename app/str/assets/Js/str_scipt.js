// window.alert ("carregou");
//Permitir o retorno do navegador ao formulário após erro
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// EDITAR AS IMAGENS DO BANNER

// function inputFileValImg(){
//     //Recebe o valor do campo
//     var new_image = document.querySelector('#new_image')
//     var filePath = new_image.value;
    
    
//     var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
//     if(!allowedExtensions.exec(filePath)){

//         new_image.value = '';

//         document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário selecionar uma imagem JPG ou PNG</p>";
//         return;
//     }else{
//         previewImage(new_image)
//         document.getElementById("msg").innerHTML = "<p></p>";
//         return
//     }
// }

// function previewImage(new_image){
//     if((new_image.files) && (new_image.files[0])){
//         //new FileReader() Serve para ler o conteúdo do arquivo
//         var reader = new FileReader();
//         // onload (Dispara quando qualquer elemento tiver sido carregado)
//         reader.onload = function(e){
//             document.getElementById('preview-img').innerHTML = "<img src='"+ e.target.result +"' alt='imagem'style='width: 100px;'>"
//         }

//     }
//     // readAsDataUrl - Retorna os dados do formato blob com uma URL de dados - Blob representa um arquivo
//     reader.readAsDataURL(new_image.files[0]);
// }



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




// const inputFile = document.querySelector('#banner-background-edit');
// const pictureImage = document.querySelector('.content-home-edit');
// const pictureImageOld = "<img src='/lojavirtual/app/str/assets/images/banners/banner-bg.jpg'>";
// pictureImage.innerHTML = pictureImageOld;

// inputFile.addEventListener('change', function (e) {
//     const inputTarget = e.target;
//     const file = inputTarget.files[0];

//     if (file) {
//         const reader = new FileReader();


//         reader.addEventListener('load', function (e) {
//             const readertTarget = e.target;

//             const img = document.createElement('img');

//             img.src = readertTarget.result;

//             // img.classList.add('picture_img');
//             pictureImage.innerHTML = '';
//             pictureImage.appendChild(img);
//         });

//         reader.readAsDataURL(file)
//     } 
//     else {
//         pictureImage.innerHTML = pictureImageOld;
//     }
// })


// const inputFile = document.querySelector('#picture_input');
// const pictureImage = document.querySelector('.picture_image');
// const pictureImageTxt = 'Choose an Image';
// pictureImage.innerHTML = pictureImageTxt;

// inputFile.addEventListener('change', function (e) {
//     const inputTarget = e.target;
//     const file = inputTarget.files[0];

//     if (file) {
//         const reader = new FileReader();


//         reader.addEventListener('load', function (e) {
//             const readertTarget = e.target;

//             const img = document.createElement('img');

//             img.src = readertTarget.result;

//             img.classList.add('picture_img');
//             pictureImage.innerHTML = '';
//             pictureImage.appendChild(img);
//         });

//         reader.readAsDataURL(file)
//     } else {
//         pictureImage.innerHTML = pictureImageTxt;
//     }
// })









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

if ('#msg') {
    setTimeout(() => {
        document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
    }, 3000);
}

