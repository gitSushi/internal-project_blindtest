<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $navTitle ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
 <!-- Main container -->
 <nav class="level">
            <!-- Left side -->
            <div class="level-left">
                <div class="level-item">
                    <p class="subtitle is-3">
                        <span class="icon">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                    </p>
                </div>
                <div class="level-item">
                    <p class="title"><?= $navTitle ?></p>
                </div>
            </div>

            <!-- Right side -->
            <div class="level-right">
                <div class="level-item">
                    <p class="subtitle is-3">
                        <span class="icon">
                            <i class="fas fa-user-cog"></i>
                        </span>
                    </p>
                </div>
                <p class="level-item"><strong>serial #</strong></p>
            </div>
        </nav>