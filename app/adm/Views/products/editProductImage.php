<?php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
    // var_dump($this->data['form']);
}

?>

<div class="content">
    <div class="wrapper">
        <div class="row">
            <div class="content-form">
                <div class="row">

                    <form method="post" action="" class="form form-edit-image radius" name="form-edit-image" id="form-edit-image" enctype="multipart/form-data">

                        <div class="form-header">
                            <div class="title-content">
                                <span>Editar Imagem</span>
                            </div>
                            <div class="btn-close btn-danger radius">
                                <span class="line line1"></span>
                                <span class="line line2"></span>
                            </div>
                        </div>

                        <div class="row-input">
                            <?php
                            $product_image = "";
                            if (isset($valorForm['product_image'])) {
                                $product_image = $valorForm['product_image'];
                            }
                            ?>

                            <div class="data-image">
                                <input type="file" name="product_image" id="product_image" class="input-data" value="<?php echo $product_image ?>">
                                <label for="product_image" class="label-input-image"></label><br>
                            </div>

                        </div>
                        <div class="row-input">
                            <div id="result">
                                <?php
                                if (isset($_SESSION['msg'])) {
                                    echo "<div id='msg'>" . $_SESSION['msg'] . "</div>";
                                    unset($_SESSION['msg']);
                                }
                                ?>
                                <div id="msg"></div>
                            </div>
                            <button type="submit" class="btn btn-warning radius" name="SendAddProduct" id="SendAddProduct" value="Cadastrar">Salvar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>