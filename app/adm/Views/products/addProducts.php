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

                    <form method="post" action="" class="form form-add-product radius" name="form-add-product" id="form-add-product" enctype="multipart/form-data">

                        <div class="form-header">
                            <div class="title-content">
                                <span>Cadastrar Produtos</span>
                            </div>
                            <div class="btn-close btn-danger radius">
                                <span class="line line1"></span>
                                <span class="line line2"></span>
                            </div>
                        </div>

                        <div class="row-input">
                            <?php
                            $product_name = "";
                            if (isset($valorForm['product_name'])) {
                                $product_name = $valorForm['product_name'];
                            }
                            ?>
                            <div>
                                <div class="field-data data-name">
                                    <input type="text" name="product_name" id="product_name" value="<?php echo $product_name; ?>" class="input-data font-medium radius" required><br><br>
                                    <label for="product_name" class="label-input">Produto:</label><br>
                                </div>
                            </div>
                            <?php
                            $product_tamanho = "";
                            if (isset($valorForm['product_tamanho'])) {
                                $product_tamanho = $valorForm['product_tamanho'];
                            }
                            ?>
                            <div class="field-data data-tamanho">
                                <input type="text" name="product_tamanho" id="product_tamanho" value="<?php echo $product_tamanho; ?>" class="input-data font-medium radius" required><br><br>
                                <label for="product_tamanho" class="label-input">Tamanho:</label><br>
                            </div>


                        </div>

                        <div class="row-input">
                            <?php
                            $product_buy = "";
                            if (isset($valorForm['product_buy'])) {
                                $product_buy = $valorForm['product_buy'];
                            }
                            ?>
                            <div class="field-data data-buy">
                                <input type="text" name="product_buy" id="product_buy" value="<?php echo $product_buy; ?>" class="input-data font-medium radius" required><br><br>
                                <label for="product_buy" class="label-input">Preço R$:</label><br>
                            </div>
                            <?php
                            $product_marca = "";
                            if (isset($valorForm['product_marca'])) {
                                $product_marca = $valorForm['product_marca'];
                            }
                            ?>
                            <div class="field-data data-marca">
                                <input type="text" name="product_marca" id="product_marca" value="<?php echo $product_marca; ?>" class="input-data font-medium radius" required><br><br>
                                <label for="product_marca" class="label-input">Marca:</label><br>
                            </div>
                            <?php
                            $product_fabricante = "";
                            if (isset($valorForm['product_fabricante'])) {
                                $product_fabricante = $valorForm['product_fabricante'];
                            }
                            ?>
                            <div class="field-data data-fabricante">
                                <input type="text" name="product_fabricante" id="product_fabricante" value="<?php echo $product_fabricante; ?>" class="input-data font-medium radius" required><br><br>
                                <label for="product_fabricante" class="label-input">Fabricante:</label><br>
                            </div>
                            <?php
                            $product_estoque = "";
                            if (isset($valorForm['product_estoque'])) {
                                $product_estoque = $valorForm['product_estoque'];
                            }
                            ?>
                            <div class="field-data data-estoque">
                                <input type="text" name="product_estoque" id="product_estoque" value="<?php echo $product_estoque; ?>" class="input-data font-medium radius" required><br><br>
                                <label for="product_estoque	" class="label-input">Estoque:</label><br>
                            </div>

                        </div>

                        <div class="row-input">
                            <?php
                            $product_custo = "";
                            if (isset($valorForm['product_custo'])) {
                                $product_custo = $valorForm['product_custo'];
                            }
                            ?>
                            <div class="field-data data-custo">
                                <input type="text" name="product_custo" id="product_custo" value="<?php echo $product_custo; ?>" class="input-data font-medium radius" required><br><br>
                                <label for="product_custo" class="label-input">Custo R$:</label><br>
                            </div>

                            <?php
                            $product_fabricado = "";
                            if (isset($valorForm['product_fabricado'])) {
                                $product_fabricado = $valorForm['product_fabricado'];
                            }
                            ?>
                            <div class="field-data data-fabricado">
                                <input type="date" name="product_fabricado" id="product_fabricado" value="<?php echo $product_fabricado; ?>" class="input-data font-medium radius"><br><br>
                                <label for="product_fabricado" class="label-input">Data de Fabricação:</label><br>
                            </div>

                            <?php
                            $product_vencimento = "";
                            if (isset($valorForm['product_vencimento'])) {
                                $product_vencimento = $valorForm['product_vencimento'];
                            }
                            ?>
                            <div class="field-data data-vencimento">
                                <input type="date" name="product_vencimento" id="product_vencimento" value="<?php echo $product_vencimento; ?>" class="input-data font-medium radius"><br><br>
                                <label for="product_vencimento" class="label-input">Vencimento:</label><br>
                            </div>

                        </div>

                        <div class="row-input">
                            <?php
                            $product_obs = "";
                            if (isset($valorForm['product_obs'])) {
                                $product_obs = $valorForm['product_obs'];
                            }
                            ?>
                            <div class="field-data data-obs">
                                <input type="text" name="product_vencimento" id="product_vencimento" value="<?php echo $product_obs; ?>" class="input-data font-medium radius" placeholder="Observações:"><br><br>
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
                            <button type="submit" class="btn btn-success radius" name="SendAddProduct" id="SendAddProduct" value="Cadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>