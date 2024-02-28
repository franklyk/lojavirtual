<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}
if (isset($this->data['form'][0])) {
    $valorForm = $this->data['form'][0];
}
?>

<div class="content-edit-image">


    <div id="msg"></div>

    <div id="view-image">
        <img src="<?php echo URL ?>app/str/assets/images/banners/<?php echo $background ?>" alt="">
    </div>
    <form action="" method="post" enctype="multipart/form-data" id="form-edit-background">

        <!-- <?php
        $id = '';
        if (isset($valorForm['id'])) {
            $id = $valorForm['id'];
        }
        ?>
        <input type="hidden" name="id" value="<?php echo $id ?>"> -->


        <?php
        $background = '';
        if (isset($valorForm['banner_background'])) {
            $background = $valorForm['banner_background'];
        }
        ?>
        <label for="banner_background" class="btn btn-warning">Selecionar Imagem</label>
        <input type="file" name="banner_background" id="banner_background" onchange="inputFileValImg()" value="<?php echo $background  ?>">

        <button type="submit" class="btn btn-warning" name="SendEditBackBanner" id="SendEditBackBanner" value="Salvar">Salvar</button>
    </form>
</div>