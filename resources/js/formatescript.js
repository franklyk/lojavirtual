// window.alert ("carregou");
//Permitir o retorno do navegador ao formulário após erro
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

const formBannerAdd = document.querySelector('#form-banner-add');
if(formBannerAdd){

    const inputImgBanner = document.querySelector('#img_banner');
    const labelImageBanner = document.querySelector('#image_banner');
    const replaceImageBanner = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i>';

    labelImageBanner.innerHTML = replaceImageBanner;
    
    inputImgBanner.addEventListener('change', function(e){
        const inputTarget = e.target;
        const file = inputTarget.files[0];
    
        if(file){
            const reader = new FileReader();
    
            reader.addEventListener('load', function(e){
                const readertTarget = e.target;
    
                const img = document.createElement('img');
    
                img.src = readertTarget.result;
    
                img.classList.add('picture_img');
                labelImageBanner.innerHTML = '';
                labelImageBanner.appendChild(img);
            });
    
            reader.readAsDataURL(file)

        }else{
            labelImageBanner.innerHTML = replaceImageBanner;
        }
    })
    const inputBackground = document.querySelector('#img_background');
    const labelImageBackground = document.querySelector('#image_background');
    const replaceImageBackground = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i>';

    labelImageBackground.innerHTML = replaceImageBackground;
    
    inputBackground.addEventListener('change', function(e){
        const inputTarget = e.target;
        const file = inputTarget.files[0];
    
        if(file){
            const reader = new FileReader();
    
            reader.addEventListener('load', function(e){
                const readertTarget = e.target;
    
                const img = document.createElement('img');
    
                img.src = readertTarget.result;
    
                img.classList.add('picture_img');
                labelImageBackground.innerHTML = '';
                labelImageBackground.appendChild(img);
            });
    
            reader.readAsDataURL(file)

        }else{
            labelImageBackground.innerHTML = replaceImageBackground;
        }
    })

}



const formEdit = document.querySelector('[data-id="form-edit"]');

const labelBanner = document.querySelector('[data-labelbanner="labelbanner"]');
const inputBanner = document.querySelector('[data-imagebanner="imagebanner"]');

const labelBackground = document.querySelector('[data-labelbackground="labelbackground"]');
const inputBackground = document.querySelector('[data-imagebackground="imagebackground"]');


if(formEdit){
    inputBanner.addEventListener('change', function(e){
    const inputTarget = e.target;
    const file = inputTarget.files[0];
    
    if(file){
        const reader = new FileReader();
        
        reader.addEventListener('load', function(e){
            const readerTarget = e.target;
            
            
            const img = document.createElement('img');
            
            img.src = readerTarget.result;
            
            // img.classList.add('picture_img');
            labelBanner.innerHTML = '';
            labelBanner.innerHTML = "<img src='"+ e.target.result +"'>";
            // labelImage.appendChild(img);
        });
        reader.readAsDataURL(file);

        console.log(reader);
    }
    })
    inputBackground.addEventListener('change', function(e){
        const inputTarget = e.target;
        const file = inputTarget.files[0];
        
        if(file){
            const reader = new FileReader();
            
            reader.addEventListener('load', function(e){
                const readerTarget = e.target;
                
                
                const img = document.createElement('img');
                
                img.src = readerTarget.result;
                
                // img.classList.add('picture_img');
                labelBackground.innerHTML = '';
                labelBackground.innerHTML = "<img src='"+ e.target.result +"'>";
                // labelImage.appendChild(img);
            });
            reader.readAsDataURL(file);

            console.log(reader);
        }
        
    });
}



const formAddUser = document.querySelector('#form-add-user');
if(formAddUser){

    const inputImgUser = document.querySelector('#img_user');
    const labelImageuser = document.querySelector('#image_user');
    const replaceImageUser = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i>';

    labelImageuser.innerHTML = replaceImageUser;
    
    inputImgUser.addEventListener('change', function(e){
        const inputTarget = e.target;
        const file = inputTarget.files[0];
    
        if(file){
            const reader = new FileReader();
    
            reader.addEventListener('load', function(e){
                const readertTarget = e.target;
    
                const img = document.createElement('img');
    
                img.src = readertTarget.result;
    
                img.classList.add('rounded-full');
                labelImageuser.innerHTML = '';
                labelImageuser.appendChild(img);
            });
    
            reader.readAsDataURL(file)

        }else{
            labelImageuser.innerHTML = replaceImageUser;
        }
    })


}



// const formBanner = document.getElementById('form-banner');
// if(formBanner){

//     const inputBanner = document.querySelector('#img_banner');
//     const pictureBanner = document.querySelector('#image_banner');
//     const pictureReplaceBanner = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i> ';

//     pictureBanner.innerHTML = pictureReplaceBanner;
    
//     inputBanner.addEventListener('change', function(e){
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];
    
//         if(file){
//             const reader = new FileReader();
        
//             reader.addEventListener('load', function(e){
//                 const readertTarget = e.target;
    
//                 const img = document.createElement('img');
    
//                 img.src = readertTarget.result;
    
//                 img.classList.add('picture_img');
//                 pictureBanner.innerHTML = '';
//                 pictureBanner.appendChild(img);
//             });
    
//             reader.readAsDataURL(file)
            
//             return

//         }else{
//             pictureBanner.innerHTML = pictureReplaceBanner;
//         }
//     })
    
    
//     const inputBackground = document.querySelector('#img_background');
//     const pictureBackground = document.querySelector('#image_background');
//     const pictureReplaceBackground = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i> ';

//     pictureBackground.innerHTML = pictureReplaceBackground;
    
//     inputBackground.addEventListener('change', function(e){
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];
    
//         if(file){
//             const reader = new FileReader();
    
//             reader.addEventListener('load', function(e){
//                 const readertTarget = e.target;
    
//                 const img = document.createElement('img');
    
//                 img.src = readertTarget.result;
    
//                 img.classList.add('picture_img');
//                 pictureBackground.innerHTML = '';
//                 pictureBackground.appendChild(img);
//             });
    
//             reader.readAsDataURL(file)
//             return
            
//         }else{
//             pictureBackground.innerHTML = pictureBackground;
//         }
//     })
// }



// const formBannerEdit = document.getElementById('form-banner-edit');
// if(formBannerEdit){
     
//     const inputBannerEdit = document.querySelector('#img_banner_edit');
//     const pictureBannerEdit = document.querySelector('#image_banner_edit');
//     const pictureReplaceBannerEdit = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i> ';


//     pictureBannerEdit.innerHTML = pictureReplaceBannerEdit;
    
//     inputBannerEdit.addEventListener('change', function(e){
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];
    
//         if(file){
//             const reader = new FileReader();
    
    
//             reader.addEventListener('load', function(e){
//                 const readertTarget = e.target;
    
//                 const img = document.createElement('img');
    
//                 img.src = readertTarget.result;
    
//                 img.classList.add('picture_img');
//                 pictureBannerEdit.innerHTML = '';
//                 pictureBannerEdit.appendChild(img);
//             });
    
//             reader.readAsDataURL(file)
//             return
//         }else{
//             pictureBannerEdit.innerHTML = pictureReplaceBannerEdit;
//         }
    
//     })


//     const inputBackgroundEdit = document.querySelector('#img_background_edit');
//     const pictureBackgroundEdit = document.querySelector('#image_background_edit');
//     const pictureReplaceBackgroundEdit = '<i class="text-gray-200 text-7xl bi bi-camera-fill"></i> ';
//     if(pictureBackgroundEdit){
//         pictureBackgroundEdit.innerHTML = pictureReplaceBackgroundEdit;
        
//         inputBackgroundEdit.addEventListener('change', function(e){
//             const inputTarget = e.target;
//             const file = inputTarget.files[0];
        
//             if(file){
//                 const reader = new FileReader();
        
//                 reader.addEventListener('load', function(e){
//                     const readertTarget = e.target;
        
//                     const img = document.createElement('img');
        
//                     img.src = readertTarget.result;
        
//                     img.classList.add('picture_img');
//                     pictureBackgroundEdit.innerHTML = '';
//                     pictureBackgroundEdit.appendChild(img);
//                 });
        
//                 reader.readAsDataURL(file)

//             }else{
//                 pictureBackgroundEdit.innerHTML = pictureReplaceBackgroundEdit;
//             }
//         })
//     }
// }





















































// const formLogin = document.getElementById('form-login');
// if (formLogin) {

//     formLogin.addEventListener("submit", async (e) => {
//         var email = document.querySelector('#email').value;
//         if (email === "") {
//             e.preventDefault();
//             document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário preencher campo E-mail!</p>";
//             setTimeout(() => {
//                 document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
//             }, 3000);
//             return;
//         } else {
//             document.getElementById("msg").innerHTML = "<p></p>";
//         }

//         var password = document.querySelector('#password').value;

//         if (password === "") {
//             e.preventDefault();
//             document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário preencher campo Senha!</p>";
//             setTimeout(() => {
//                 document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
//             }, 3000);
//             return;
//         } else {
//             document.getElementById("msg").innerHTML = "<p></p>";
//         }
//     })
// }

// function inputFileValImg(){
//     //Recebe o valor do campo
//     var bannerBackground = document.querySelector('#banner_background')
//     var filePath = bannerBackground.value;
    
    
//     var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
//     if(!allowedExtensions.exec(filePath)){

//         bannerBackground.value = '';

//         document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário selecionar uma imagem JPG ou PNG</p>";
//         return;
//     }else{
//         previewImage(bannerBackground)
//         document.getElementById("msg").innerHTML = "<p></p>";
//         return
//     }
// }


// function showPass() {
//     let password = document.getElementById('password');
//     let btnShowPass = document.getElementById('eye-view-pass');

//     if (password.type === 'password') {
//         password.setAttribute('type', 'text');
//         btnShowPass.classList.replace('fa-eye', 'fa-eye-slash');
//     } else {
//         password.setAttribute('type', 'password');
//         btnShowPass.classList.replace('fa-eye-slash', 'fa-eye');
//     }
// }

// if ('#msg') {
//     setTimeout(() => {
//         document.getElementById("msg").innerHTML = "<p style='display:none'></p>";
//     }, 3000);
// }
























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

