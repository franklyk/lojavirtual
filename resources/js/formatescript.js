// window.alert ("carregou");
//Permitir o retorno do navegador ao formulário após erro
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

const inputFile = document.querySelector('#img_banner');
const pictureImage = document.querySelector('#image_banner');
const pictureImageElement = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i> ';
pictureImage.innerHTML = pictureImageElement;

inputFile.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if(file){
        const reader = new FileReader();


        reader.addEventListener('load', function(e){
            const readertTarget = e.target;

            const img = document.createElement('img');

            img.src = readertTarget.result;

            img.classList.add('picture_img');
            pictureImage.innerHTML = '';
            pictureImage.appendChild(img);
        });

        reader.readAsDataURL(file)
    }else{
        pictureImage.innerHTML = pictureImageElement;
    }

})


const inputFileDetail1 = document.querySelector('#img_back');
const pictureImageDetail1 = document.querySelector('#image_back');
const pictureImageElementDetail1 = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i> ';
pictureImageDetail1.innerHTML = pictureImageElementDetail1;

inputFileDetail1.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if(file){
        const reader = new FileReader();


        reader.addEventListener('load', function(e){
            const readertTarget = e.target;

            const img = document.createElement('img');

            img.src = readertTarget.result;

            img.classList.add('picture_img');
            pictureImageDetail1.innerHTML = '';
            pictureImageDetail1.appendChild(img);
        });

        reader.readAsDataURL(file)
    }else{
        pictureImageDetail1.innerHTML = pictureImageElementDetail1;
    }

})

const inputFileDetail2 = document.querySelector('#img_prod_detail2');
const pictureImageDetail2 = document.querySelector('.picture_image_detail2');
const pictureImageElementDetail2 = '<i class="fa fa-camera"></i>';
pictureImageDetail2.innerHTML = pictureImageElementDetail2;

inputFileDetail2.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if(file){
        const reader = new FileReader();


        reader.addEventListener('load', function(e){
            const readertTarget = e.target;

            const img = document.createElement('img');

            img.src = readertTarget.result;

            img.classList.add('picture_img');
            pictureImageDetail2.innerHTML = '';
            pictureImageDetail2.appendChild(img);
        });

        reader.readAsDataURL(file)
    }else{
        pictureImageDetail2.innerHTML = pictureImageElementDetail2;
    }

})

const inputFileDetail3 = document.querySelector('#img_prod_detail3');
const pictureImageDetail3 = document.querySelector('.picture_image_detail3');
const pictureImageElementDetail3 = '<i class="fa fa-camera"></i>';
pictureImageDetail3.innerHTML = pictureImageElementDetail3;

inputFileDetail3.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if(file){
        const reader = new FileReader();


        reader.addEventListener('load', function(e){
            const readertTarget = e.target;

            const img = document.createElement('img');

            img.src = readertTarget.result;

            img.classList.add('picture_img');
            pictureImageDetail3.innerHTML = '';
            pictureImageDetail3.appendChild(img);
        });

        reader.readAsDataURL(file)
    }else{
        pictureImageDetail3.innerHTML = pictureImageElementDetail3;
    }

})

const inputFileDetail4 = document.querySelector('#img_prod_detail4');
const pictureImageDetail4 = document.querySelector('.picture_image_detail4');
const pictureImageElementDetail4 = '<i class="fa fa-camera"></i>';
pictureImageDetail4.innerHTML = pictureImageElementDetail4;

inputFileDetail4.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if(file){
        const reader = new FileReader();


        reader.addEventListener('load', function(e){
            const readertTarget = e.target;

            const img = document.createElement('img');

            img.src = readertTarget.result;

            img.classList.add('picture_img');
            pictureImageDetail4.innerHTML = '';
            pictureImageDetail4.appendChild(img);
        });

        reader.readAsDataURL(file)
    }else{
        pictureImageDetail4.innerHTML = pictureImageElementDetail4;
    }

})


























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
























// function getTimeRemaining(endtime) {
//     var t = Date.parse(endtime) - Date.parse(new Date());
//     var seconds = Math.floor((t / 1000) % 60);
//     var minutes = Math.floor((t / 1000 / 60) % 60);
//     var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
//     var days = Math.floor(t / (1000 * 60 * 60 * 24));
//     return {
//         'total': t,
//         'days': days,
//         'hours': hours,
//         'minutes': minutes,
//         'seconds': seconds
//     };
// }

// function initializeClock(id, endtime) {
//     var clock = document.getElementById(id);
//     var daysSpan = clock.querySelector('.days');
//     var hoursSpan = clock.querySelector('.hours');
//     var minutesSpan = clock.querySelector('.minutes');
//     var secondsSpan = clock.querySelector('.seconds');

//     function updateClock() {
//         var t =
//             function getTimeRemaining(endtime) {
//                 var t = Date.parse(endtime) - Date.parse(new Date());
//                 var seconds = Math.floor((t / 1000) % 60);
//                 var minutes = Math.floor((t / 1000 / 60) % 60);
//                 var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
//                 var days = Math.floor(t / (1000 * 60 * 60 * 24));
//                 return {
//                     'total': t,
//                     'days': days,
//                     'hours': hours,
//                     'minutes': minutes,
//                     'seconds': seconds
//                 };
//             }

//         function initializeClock(id, endtime) {
//             var clock = document.getElementById(id);
//             var daysSpan = clock.querySelector('.days');
//             var hoursSpan = clock.querySelector('.hours');
//             var minutesSpan = clock.querySelector('.minutes');
//             var secondsSpan = clock.querySelector('.seconds');

//             function updateClock() {
//                 var t = getTimeRemaining(endtime);

//                 daysSpan.innerHTML = t.days;
//                 hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
//                 minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
//                 secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

//                 if (t.total <= 0) {
//                     clearInterval(timeinterval);
//                 }
//             }

//             updateClock();
//             var timeinterval = setInterval(updateClock, 1000);
//         }

//         var deadline = new Date(Date.parse(new Date('2024/05/01')));
//         initializeClock('exclusive-deal', deadline);
//         getTimeRemaining(endtime);

//         daysSpan.innerHTML = t.days;
//         hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
//         minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
//         secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

//         if (t.total <= 0) {
//             clearInterval(timeinterval);
//         }
//     }

//     updateClock();
//     var timeinterval = setInterval(updateClock, 1000);
// }

// var deadline = new Date(Date.parse(new Date('2024/05/01')));
// initializeClock('exclusive-deal', deadline);

