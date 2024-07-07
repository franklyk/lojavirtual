// window.alert ("carregou");

// BUTTON MENU
const btnMenu = document.querySelector('#btn-menu')
const menuMobile = document.querySelector('#menu-mobile')
const menuDeskTop = document.querySelector('#menu-desk-top')
const labelLink = document.querySelectorAll('.label-link')

btnMenu.addEventListener('click', function(){
    if((window.screen.width) < 400){
        menuMobile.classList.toggle('open')
        btnMenu.classList.toggle('active')
    }else{
        menuDeskTop.classList.toggle('open')
        btnMenu.classList.toggle('active')
        labelLink.forEach((link)=>(
            link.classList.toggle('active')
        ))
    }
})

// ACTIVATE MENU
var itemMenu = document.querySelectorAll('.item-menu')

function activeLink(){
    itemMenu.forEach((item)=>
        item.classList.remove('active')
    )
    this.classList.add('active')
}
itemMenu.forEach((item)=>
    item.addEventListener('click', activeLink)
)



// // BUTTON MENU
// var btnMenu = document.querySelector('#btn-menu')
// var sideBar = document.querySelector('.sidebar')
// var labelLink = document.querySelectorAll('.label-link')

// btnMenu.addEventListener('click', function(){
//     // window.alert('Carregou!')
//     sideBar.classList.toggle('expanded')
//     labelLink.forEach((item)=>
//         item.classList.toggle('active')
//     )
    

// })

// // ACTIVATE MENU
// var itemMenu = document.querySelectorAll('.item-menu')

// function activeLink(){
//     itemMenu.forEach((item)=>
//         item.classList.remove('active')
//     )
//     this.classList.add('active')
// }
// itemMenu.forEach((item)=>
//     item.addEventListener('click', activeLink)
// )



