<?php
    ($buttonBg = get_theme_option('button_background')) || ($buttonBg = "#ffc333");
    ($buttonText = get_theme_option('button_text')) || ($buttonText = "#000000");
    ($exhibitNavBg = get_theme_option('eb_nav_background')) || ($linkColor = "#ffc333");
    ($exhibitNavText = get_theme_option('eb_nav_text')) || ($linkText = "#000000");
    ($featuredBg = get_theme_option('featured_background')) || ($featuredBg = "#000000");
    ($featuredText = get_theme_option('featured_text')) || ($featuredText = "#FFFFFF");
    ($homeIntroBg = get_theme_option('home_intro_background')) || ($homeIntroBg = "#ffc333");
    ($homeIntroText = get_theme_option('home_intro_text')) || ($homeIntroText = "#000000");
    ($topNavHighlightText = get_theme_option('top_nav_highlight_text')) || ($buttonBg = "#ffc333");
?>

<style>

p a,
span a,
table a,
.secondary-nav li a,
.pagination a,
.item-pagination a,
#sort-links a,
.element-text a,
#exhibit-page-navigation a,
#featured .featured-meta h3,
.button,
button,
input[type="submit"] {
    background-color: <?php echo $buttonBg; ?>;
    color: <?php echo $buttonText; ?>;
}

.button,
button,
input[type="submit"] {
    border-color: <?php echo $buttonText; ?>
}

#exhibit-pages {
    background-color: <?php echo $exhibitNavBg; ?>;
}

#exhibit-pages a {
    color: <?php echo $exhibitNavText; ?>;
}

#featured .featured-meta > * {
    background-color: <?php echo $featuredBg; ?>;
    color: <?php echo $featuredText; ?>;
}

#top-nav > ul > li > a {
    color: <?php echo $topNavHighlightText; ?>;
}

#intro {
    background-color: <?php echo $homeIntroBg; ?>;
    color: <?php echo $homeIntroText; ?>;
}

</style>
