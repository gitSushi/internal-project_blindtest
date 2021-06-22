<?php 
        $navTitle = "Liste des produits";
        include("views/nav.php");

?>
    <!--Content-->

    <nav class="panel">
        <div class="panel-heading">
            <label for="productList">Entrez un nom de produit:</label>
            <input list="products" id="productList" name="productList" placeholder="nom d'un produit" required/>
            <datalist id="products">
                <?php foreach ($products as $prod) : ?>
                    <option value="<?= $prod['name'] ?>"></option>
                <?php endforeach ?>
            </datalist>
            <button type="submit" id="btn" class="button is-primary is-small">Choose</button> 
        </div>
        <div class="panel-block">
            <p id="test"></p>
        </div>
    </nav>
    <!--Tests JS-->
    <script>
        // Au click du bouton le produit selectionné est entrée dans la variable selected
            var btn = document.getElementById("btn")
            var test = document.getElementById('test')
            btn.addEventListener("click", function() {
                var selected = document.getElementById("productList").value
                test.innerHTML = selected
                
            })
    </script>
</body>
</html>