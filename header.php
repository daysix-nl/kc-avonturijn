<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href=https://use.typekit.net/rck3ktr.css>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset='UTF-8'>
</head>
<body <?php body_class( 'page-block relative' ); ?>>

<header>                    
    <div class="container flex justify-between pt-4 space-x-3">
        <?php  include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/day-six/img/icons/logo.php'; ?>
        <a class="flex justify-center space-x-1  items-center" href="#contact">
            <svg class="block" xmlns="http://www.w3.org/2000/svg" width="16.65" height="15.621" viewBox="0 0 16.65 15.621">
                <g id="Group_442" data-name="Group 442" transform="translate(2894.786 1974.05) rotate(180)">
                    <rect id="Rectangle_21" data-name="Rectangle 21" width="4.445" height="13.335" rx="1" transform="translate(2884.238 1960.715)" fill="#46ad48"/>
                    <rect id="Rectangle_22" data-name="Rectangle 22" width="4.445" height="11.557" rx="1" transform="translate(2886.308 1958.429) rotate(45)" fill="#46ad48"/>
                    <rect id="Rectangle_23" data-name="Rectangle 23" width="4.445" height="11.557" rx="1" transform="translate(2883.47 1961.572) rotate(-45)" fill="#46ad48"/>
                </g>
            </svg>

            <span class="block text-[#707070] text-20 leading-25 font-medium">Contact</span>
        </a>
    </div>
</header>
