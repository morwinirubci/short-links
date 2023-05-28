<?php
include 'request.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short links</title>
    <link rel="stylesheet" href="/styles/style.css">

</head>

<body>
    <div class="container">
        <div class="link">
            <div class="link__logo">
                <a href='/'><img src="/images/logo.svg" alt="Logo"></a>
                <h1 class="link__title">short <span>links</span></h1>
            </div>
            <form class="link__form" id="data-form" action="" method="GET">

                <div class="link_row">
                    <input name="cut_link" placeholder="your link" type="text" class="link__input">
                    <button type="submit" class="link__btn cut__btn">cut</button>
                </div>
                <div  class="link_row copy">
                    <input readonly class="copy-input" id="clickable-input" value="<?= $request; ?>" type="text">
                    <a href="#" data-copy-id="clickable-input" class="link__btn copy__btn"><img src="/images/copy.svg"></a>
                </div>
            </form>
        </div>
    </div>



</body>
<script src="/script/jquery-3.7.0.min.js"></script>

<script src="/script/jquery.validate.min.js"></script>
<script src="/script/script.js"></script>




</html>