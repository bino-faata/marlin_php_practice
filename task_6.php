<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
<?php
$user_blocks = [
    [
        "img" => "img/demo/authors/sunny.png",
        "name" => "Sunny A.",
        "work_type" => "(UI/UX Expert)",
        "work_position" => "Lead Author",
        "twitter_link" => "https://twitter.com/@myplaneticket",
        "twitter_name" => "@myplaneticket",
        "contact_link" => "https://wrapbootstrap.com/user/myorange",
        "banned_class" => "banned",
        "is_banned" => null,
    ],
    [
        "img" => "img/demo/authors/josh.png",
        "name" => "Jos K.",
        "work_type" => "(ASP.NET Developer)",
        "work_position" => "Partner &amp; Contributor",
        "twitter_link" => "https://twitter.com/@atlantez",
        "twitter_name" => "@atlantez",
        "contact_link" => "https://wrapbootstrap.com/user/Walapa",
        "banned_class" => "banned",
        "is_banned" => null,
    ],
    [
        "img" => "img/demo/authors/jovanni.png",
        "name" => "Jovanni Lo",
        "work_type" => "(PHP Developer)",
        "work_position" => "Partner &amp; Contributor",
        "twitter_link" => "https://twitter.com/@lodev09",
        "twitter_name" => "@lodev09",
        "contact_link" => "https://wrapbootstrap.com/user/lodev09",
        "banned_class" => "banned",
        "is_banned" => true,
    ],
    [
        "img" => "img/demo/authors/roberto.png",
        "name" => "Roberto R.",
        "work_type" => "(Rails Developer)",
        "work_position" => "Partner &amp; Contributor",
        "twitter_link" => "https://twitter.com/@sildur",
        "twitter_name" => "@sildur",
        "contact_link" => "https://wrapbootstrap.com/user/sildur",
        "banned_class" => "banned",
        "is_banned" => true,
    ],
];
?>
<?php foreach ($user_blocks as $user_block): ?>
        <div class="
        <?php
if (!empty($user_block["is_banned"])) {
    echo $user_block['banned_class'];
}
?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">

            <img src="<?php echo $user_block["img"]; ?>" alt="<?php echo $user_block["name"]; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
            <div class="ml-2 mr-3">
                <h5 class="m-0">
                <?php echo $user_block["name"]; ?> <?php echo $user_block["work_type"]; ?>
                    <small class="m-0 fw-300">
                    <?php echo $user_block["work_position"]; ?>
                    </small>
                </h5>
                <a href="<?php echo $user_block["twitter_link"]; ?>" class="text-info fs-sm" target="_blank"><?php echo $user_block["twitter_name"]; ?></a> -
                <a href="<?php echo $user_block["contact_link"]; ?>" class="text-info fs-sm" target="_blank" title="Contact <?php echo $user_block["name"]; ?>"><i class="fal fa-envelope"></i></a>
            </div>
        </div>
<?php endforeach;?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
