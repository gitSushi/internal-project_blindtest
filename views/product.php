<?php 
        $navTitle = "Liste des produits";
        include("views/nav.php");
?>
    <!--Content-->
    <nav class="panel">
        <div class="panel-heading">
            <label for="productList">Entrez un nom de produit:</label>
            <input list="dl" id="text" name="text" placeholder="nom d'un produit" required/>
            <datalist id="dl">
                <?php foreach ($products as $prod) : ?>
                    <option id="<?= $prod['id']?>" value="<?= $prod['name'] ?>"></option>
                <?php endforeach ?>
            </datalist>
            <button type="submit" id="btn" class="button is-primary is-small">Choose</button> 
        </div>
        <div class="panel-block columns is-multiline" id="display">
                    <!--Ici les infos seront injectées dynamiquement grâce au script js-->
        </div>
    </nav>
    <script src="../assets/js/ajaxProducts.js"></script>
</body>
</html>