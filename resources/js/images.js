// window.alert ("carregou");

// PREVIEW IMAGESvar imgUser = document.getElementById('img_user')

const formEdit = document.querySelector('#form-edit')
const img_user = document.querySelector('#img_user')
console.log(formEdit)


if (formEdit) {
    img_user.addEventListener('change', function () {
        previewImage(img_user)
    })
    function previewImage(img_user) {
        if ((img_user.files) && (img_user.files[0])) {
            var reader = new FileReader();
            console.log(reader);
            reader.addEventListener('load', function (e) {
                document.getElementById('preview-image').innerHTML = "<img src='" + e.target.result + "' alt='imagem'>"
            })
        }
        reader.readAsDataURL(img_user.files[0]);
    }
}

function inputFileValImg() {
    //Recebe o valor do campo
    var new_image = document.querySelector('#new_image')
    var filePath = new_image.value;


    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if (!allowedExtensions.exec(filePath)) {

        new_image.value = '';

        document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário selecionar uma imagem JPG ou PNG</p>";
        return;
    } else {
        previewImage(new_image)
        document.getElementById("msg").innerHTML = "<p></p>";
        return
    }
}

function previewImage(new_image) {
    if ((new_image.files) && (new_image.files[0])) {
        //new FileReader() Serve para ler o conteúdo do arquivo
        var reader = new FileReader();
        // onload (Dispara quando qualquer elemento tiver sido carregado)
        reader.addEventListener('load', function (e) {
            document.getElementById('preview-img').innerHTML = "<img src='" + e.target.result + "' alt='imagem'style='width: 100px;'>"
        })
    }
    // readAsDataUrl - Retorna os dados do formato blob com uma URL de dados - Blob representa um arquivo
    reader.readAsDataURL(new_image.files[0]);
}




// FORMULÁRIO CADASTRAR USUARIO

// const formAddUser = document.querySelector('#form-add-user');
// if (formAddUser) {

//     const inputImgUser = document.querySelector('#img_user');
//     const labelImageuser = document.querySelector('#image_user');
//     const replaceImageUser = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

//     labelImageuser.innerHTML = replaceImageUser;

//     inputImgUser.addEventListener('change', function (e) {
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.addEventListener('load', function (e) {
//                 const readertTarget = e.target;

//                 const img = document.createElement('img');

//                 img.src = readertTarget.result;

//                 img.classList.add('rounded-full');
//                 labelImageuser.innerHTML = '';
//                 labelImageuser.appendChild(img);
//             });

//             reader.readAsDataURL(file)

//         } else {
//             labelImageuser.innerHTML = replaceImageUser;
//         }
//     })
// }

// // FORMULÁRIO CADASTRAR BANNER
// const formBannerAdd = document.querySelector('#form-banner-add');
// if (formBannerAdd) {

//     const inputImgBanner = document.querySelector('#img_banner');
//     const labelImageBanner = document.querySelector('#image_banner');
//     const replaceImageBanner = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

//     labelImageBanner.innerHTML = replaceImageBanner;

//     inputImgBanner.addEventListener('change', function (e) {
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.addEventListener('load', function (e) {
//                 const readertTarget = e.target;

//                 const img = document.createElement('img');

//                 img.src = readertTarget.result;

//                 img.classList.add('picture_img');
//                 labelImageBanner.innerHTML = '';
//                 labelImageBanner.appendChild(img);
//             });

//             reader.readAsDataURL(file)

//         } else {
//             labelImageBanner.innerHTML = replaceImageBanner;
//         }
//     })
//     const inputBackground = document.querySelector('#img_background');
//     const labelImageBackground = document.querySelector('#image_background');
//     const replaceImageBackground = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

//     labelImageBackground.innerHTML = replaceImageBackground;

//     inputBackground.addEventListener('change', function (e) {
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.addEventListener('load', function (e) {
//                 const readertTarget = e.target;

//                 const img = document.createElement('img');

//                 img.src = readertTarget.result;

//                 img.classList.add('picture_img');
//                 labelImageBackground.innerHTML = '';
//                 labelImageBackground.appendChild(img);
//             });

//             reader.readAsDataURL(file)

//         } else {
//             labelImageBackground.innerHTML = replaceImageBackground;
//         }
//     })

// }

// // FORMULÁRIO EDITAR PRODUTO
// const formEdit = document.querySelector('[data-id="form-edit"]');

// const labelBanner = document.querySelector('[data-labelbanner="labelbanner"]');
// const inputBanner = document.querySelector('[data-imagebanner="imagebanner"]');

// const labelBackground = document.querySelector('[data-labelbackground="labelbackground"]');
// const inputBackground = document.querySelector('[data-imagebackground="imagebackground"]');


// if (formEdit) {
//     inputBanner.addEventListener('change', function (e) {
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.addEventListener('load', function (e) {
//                 const readerTarget = e.target;


//                 const img = document.createElement('img');

//                 img.src = readerTarget.result;

//                 // img.classList.add('picture_img');
//                 labelBanner.innerHTML = '';
//                 labelBanner.innerHTML = "<img src='" + e.target.result + "'>";
//                 // labelImage.appendChild(img);
//             });
//             reader.readAsDataURL(file);

//             console.log(reader);
//         }
//     })
//     inputBackground.addEventListener('change', function (e) {
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.addEventListener('load', function (e) {
//                 const readerTarget = e.target;


//                 const img = document.createElement('img');

//                 img.src = readerTarget.result;

//                 // img.classList.add('picture_img');
//                 labelBackground.innerHTML = '';
//                 labelBackground.innerHTML = "<img src='" + e.target.result + "'>";
//                 // labelImage.appendChild(img);
//             });
//             reader.readAsDataURL(file);

//             console.log(reader);
//         }

//     });
// }


// // FORMULÁRIO CADASTRAR PRODUTO
// const registerProductform = document.querySelector('#register-product-form');
// if (registerProductform) {

//     const productImageInput = document.querySelector('#product_image');
//     const productImageLabel = document.querySelector('#image_label');
//     const replaceImageProduct = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

//     productImageLabel.innerHTML = replaceImageProduct;

//     productImageInput.addEventListener('change', function (e) {
//         const inputTarget = e.target;
//         const file = inputTarget.files[0];

//         if (file) {
//             const reader = new FileReader();

//             reader.addEventListener('load', function (e) {
//                 const readertTarget = e.target;

//                 const img = document.createElement('img');

//                 img.src = readertTarget.result;

//                 img.classList.add('picture_img');
//                 productImageLabel.innerHTML = '';
//                 productImageLabel.appendChild(img);
//             });

//             reader.readAsDataURL(file)

//         } else {
//             productImageLabel.innerHTML = replaceImageProduct;
//         }
//     })
// }



// const formEditUserfImg = document.getElementById("form-edit-user-image");
// if (formEditUserfImg) {
//     formEditUserfImg.addEventListener("submit", async (e) => {

//         //Recebe o valor do campo NAME
//         var new_image = document.querySelector('#new_image').value;
//         if (new_image === "") {
//             e.preventDefault();

//             document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário selecionar uma imagem</p>";

//             return;
//         }else{
//             document.getElementById("msg").innerHTML = "<p></p>";
//             return
//         }
//     })

// }

// const formEditProfImg = document.getElementById("form-edit-prof-img");
// if (formEditProfImg) {
//     formEditProfImg.addEventListener("submit", async (e) => {

//         //Recebe o valor do campo NAME
//         var new_image = document.querySelector('#new_image').value;
//         if (new_image === "") {
//             e.preventDefault();

//             document.getElementById("msg").innerHTML = "<p class='alert-danger'>Necessário selecionar uma imagem</p>";

//             return;
//         }else{
//             document.getElementById("msg").innerHTML = "<p></p>";
//             return
//         }
//     })

// }
