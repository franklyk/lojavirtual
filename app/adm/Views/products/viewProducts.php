
<?php
    echo "<h1>Listar Produtos</h1> <br>";

    echo "<a href='". URL ."list-products/index'>Listar</a> <br><br>";
    
    foreach($this->data['viewProducts'] as $Product){
        extract($Product);
        // var_dump($Product);
        echo "IMAGEM: ===>$product_image <br>";
        echo "ID: ===>$id <br>";
        echo "NOME: ===>$product_name <br>";
        echo "PREÇO: ===>$product_buy <br>";
        echo "TAMANHO: ===>$product_tamanho <br>";
        echo "MARCA:  ===>$product_marca <br>";
        
    }


?>