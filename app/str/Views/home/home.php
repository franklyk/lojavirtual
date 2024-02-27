<?php 

    echo "<div class='content-home'>
    <div class='banner-home'>
        <div class='banner-container'>
            <div class='banner-description'>
                <h1 class='banner-title'>Nike New <br> Collection!</h1>
                <p class='banner-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit, vitae odit ipsum hic et tempore possimus.</p>
                <div class='add-cart'>
                    <a href='' class='add-cart-link'>
                        <img src='". URL ."app/str/assets/images/icon/cart.png' alt='' class='add-img'>
                        <span class='add-text'>Adicionar ao carrinho</span>
                    </a>
                </div>
            </div>
            <div class='banner-image'>
                <img src='". URL."app/str/assets/images/products/banner-img.png' alt=''>
            </div>
        </div>
    </div>
</div>";

?>

<?php
// app/str/assets/images/banners/banner-img.png;
/*if ((!empty($_SESSION['user_image'])) and (file_exists("app/adms/assets/images/users/" . $_SESSION['user_id'] . "/" . $_SESSION['user_image']))) {
    echo "<img src='" . URLADM . "app/adms/assets/images/users/" . $_SESSION['user_id'] . "/" . $_SESSION['user_image'] . "' width='40'>";
} else {
    echo "<img src='" . URL . "app/str/assets/images/banners/banner-img.png'>";
}*/
?>