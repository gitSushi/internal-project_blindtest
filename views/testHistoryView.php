<?php
$navTitle = "HISTORIQUE DE TESTS";
include("views/nav.php");
?>
<div class="columns is-multiline">
    <? foreach ($datas as $data) : ?>




        <div class="column is-half">
            <a href='http://localhost:1597/tests/<?= $data["test_group_id"] ?>'>
                <div class="notification has-text-centered <?= (($data["has_product_passed_test"] === "1") ? "is-success" : (($data["has_product_passed_test"] === "0") ? "is-danger" : "is-warning")) ?>">
                    <p> NOM DU GROUPE DE TESTS :</p>
                    <?= $data["name"] ?>

                    <div class="box">
                        <p>RÉFÉRENCE EMPLOYÉ :</p>
                        <?= $data["reference_employee"] ?>

                        <br>

                        <p>NOM DU PRODUIT :</p>
                        <?= $data["pname"] ?>
                    </div>
                </div>
            </a>
        </div>




    <? endforeach; ?>
</div>
</body>

</html>