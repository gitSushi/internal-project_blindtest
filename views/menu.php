   <?php
    $navTitle = "MENU";
    include("views/nav.php");
    ?>

   <div class="columns is-multiline">
       <div class="column is-half has-text-centered py-8 px-6">
           <div class="border">
               <a class="inline-block" href="/history">
                   <span class="icon mb-4 is-size-5">
                       <i class="fas fa-sort-alpha-down-alt fa-3x"></i>
                   </span>
                   <p class="subtitle is-4">HISTORIQUE DE TESTS</p>
               </a>
           </div>
       </div>
       <div class="column is-half has-text-centered py-8 px-6">
           <div class="border">
               <a class="inline-block" href="/products">
                   <span class="icon mb-4 is-size-5">
                       <i class="fas fa-sort-alpha-down fa-3x"></i>
                   </span>
                   <p class="subtitle is-4">LISTE DES PRODUITS</p>
               </a>
           </div>
       </div>
   </div>

   <div class="columns is-multiline">
       <div class="column is-half has-text-centered py-8 px-6">
           <div class="border">
               <a class="inline-block" href="/testgroup/form">
                   <span class="icon mb-4 is-size-5">
                       <i class="fas fa-edit fa-3x"></i>
                   </span>
                   <p class="subtitle is-4">CRÉATION DE TESTS</p>
               </a>
           </div>
       </div>

       <div class="column is-half has-text-centered py-8 px-6">
           <div class="border">
               <a class="inline-block" href="/logout">
                   <span class="icon mb-4 is-size-5">
                       <i class="fas fa-sign-out-alt fa-3x"></i>
                   </span>
                   <p class="subtitle is-4">DÉCONNEXION</p>
               </a>
           </div>
       </div>
   </div>
   </main>
   </body>

   </html>