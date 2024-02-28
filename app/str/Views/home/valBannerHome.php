<?php

foreach ($this->data as $banner) {
    extract($banner);

?>

    <div class="content-home-edit" style="background-image: url(<?php echo URL ?>app/str/assets/images/banners/<?php echo $banner_background ?>);">
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<div id='msg'>" . $_SESSION['msg'] . "</div>";
            unset($_SESSION['msg']);
        }
        ?>

        <div id="msg"></div>
        <div class="banner-home-edit">
            <div class="banner-container-edit">
                <div class="banner-description-edit">
                    <h1 class="banner-title-edit"><?php echo $banner_title ?></h1>
                    <p class="banner-text-edit"><?php echo $banner_text ?></p>
                    <div class="add-cart-edit">
                        <a href="" class="add-cart-link-edit">
                            <img src="<?php echo URL ?>app/str/assets/images/icon/cart.png" alt="" class="add-img">
                            <span class="add-text-edit">Adicionar ao carrinho</span>
                        </a>
                    </div>
                </div>
                <div class="banner-image-edit">
                    <img src="<?php echo URL ?>app/str/assets/images/banners/<?php echo $banner_image ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="content-link">

        <div class="row-input">

            <?php
            echo "<a href='" . URL . "edit-back-banner-home/index/$id' class='btn btn-warning'>Editar Background</a>";

            echo "<a href='" . URL . "edit-image-banner-home/index/$id' class='btn btn-warning'>Editar Imagem</a>";

            echo "<a href='" . URL . "edit-description-banner-home/index/$id' class='btn btn-warning'>Editar Descrição</a>";

            echo "<a href='" . URL . "edit-link-banner-home/index/$id' class='btn btn-warning'>Editar Link</a>";

            ?>
        </div>
    </div>
<?php
}
?>