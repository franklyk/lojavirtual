// window.alert ("carregou");

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

// FORMULÁRIO CADASTRAR BANNER
const formBannerAdd = document.querySelector('#form-banner-add');
if (formBannerAdd) {

    const inputImgBanner = document.querySelector('#img_banner');
    const labelImageBanner = document.querySelector('#image_banner');
    const replaceImageBanner = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

    labelImageBanner.innerHTML = replaceImageBanner;

    inputImgBanner.addEventListener('change', function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function (e) {
                const readertTarget = e.target;

                const img = document.createElement('img');

                img.src = readertTarget.result;

                img.classList.add('picture_img');
                labelImageBanner.innerHTML = '';
                labelImageBanner.appendChild(img);
            });

            reader.readAsDataURL(file)

        } else {
            labelImageBanner.innerHTML = replaceImageBanner;
        }
    })
    const inputBackground = document.querySelector('#img_background');
    const labelImageBackground = document.querySelector('#image_background');
    const replaceImageBackground = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

    labelImageBackground.innerHTML = replaceImageBackground;

    inputBackground.addEventListener('change', function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function (e) {
                const readertTarget = e.target;

                const img = document.createElement('img');

                img.src = readertTarget.result;

                img.classList.add('picture_img');
                labelImageBackground.innerHTML = '';
                labelImageBackground.appendChild(img);
            });

            reader.readAsDataURL(file)

        } else {
            labelImageBackground.innerHTML = replaceImageBackground;
        }
    })

}

// FORMULÁRIO EDITAR PRODUTO
const formEdit = document.querySelector('[data-id="form-edit"]');

const labelBanner = document.querySelector('[data-labelbanner="labelbanner"]');
const inputBanner = document.querySelector('[data-imagebanner="imagebanner"]');

const labelBackground = document.querySelector('[data-labelbackground="labelbackground"]');
const inputBackground = document.querySelector('[data-imagebackground="imagebackground"]');


if (formEdit) {
    inputBanner.addEventListener('change', function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function (e) {
                const readerTarget = e.target;


                const img = document.createElement('img');

                img.src = readerTarget.result;

                // img.classList.add('picture_img');
                labelBanner.innerHTML = '';
                labelBanner.innerHTML = "<img src='" + e.target.result + "'>";
                // labelImage.appendChild(img);
            });
            reader.readAsDataURL(file);

            console.log(reader);
        }
    })
    inputBackground.addEventListener('change', function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function (e) {
                const readerTarget = e.target;


                const img = document.createElement('img');

                img.src = readerTarget.result;

                // img.classList.add('picture_img');
                labelBackground.innerHTML = '';
                labelBackground.innerHTML = "<img src='" + e.target.result + "'>";
                // labelImage.appendChild(img);
            });
            reader.readAsDataURL(file);

            console.log(reader);
        }

    });
}


// FORMULÁRIO CADASTRAR PRODUTO
const registerProductform = document.querySelector('#register-product-form');
if (registerProductform) {

    const productImageInput = document.querySelector('#product_image');
    const productImageLabel = document.querySelector('#image_label');
    const replaceImageProduct = '<i class="text-gray-500 text-7xl bi bi-camera-fill"></i>';

    productImageLabel.innerHTML = replaceImageProduct;

    productImageInput.addEventListener('change', function (e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function (e) {
                const readertTarget = e.target;

                const img = document.createElement('img');

                img.src = readertTarget.result;

                img.classList.add('picture_img');
                productImageLabel.innerHTML = '';
                productImageLabel.appendChild(img);
            });

            reader.readAsDataURL(file)

        } else {
            productImageLabel.innerHTML = replaceImageProduct;
        }
    })
}


