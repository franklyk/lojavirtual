<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}
if (isset($this->data['form'][0])) {
    $valorform = $this->data['form'][0];
} else {
    $valorform = '';
}
foreach($this->data['form'] as $banner){
    extract($banner);
}
?>

<div class="content-home-edit" style="background-image: url(<?php echo URL ?>app/str/assets/images/banners/<?php echo $banner_background ?>);">
    <div class="banner-home-edit">
        <div class="banner-container-edit">
            <div class="banner-description-edit">
                <h1 class="banner-title-edit"><?php echo $banner_title?></h1>
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

        <a href="" class="btn btn-info">Editar Background</a>

        <a href="" class="btn btn-info">Editar Imagem</a>

        <a href="" class="btn btn-info">Editar Descrição</a>

        <a href="" class="btn btn-info">Editar Link</a>

    </div>
</div>