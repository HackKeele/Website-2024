<?php
    // If variables don't exist, forcibly create them
    $awp_page_title = $awp_page_title ?? "null";
    $awp_browser_title = $awp_browser_title ?? "null";
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $awp_browser_title . " | Hack Keele" ?></title>
        <link rel="stylesheet" href="/include/styles.css" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- OpenGraph tags -->
        <meta property="og:title" content="<?php echo $awp_page_title; ?>" />
        <meta property="og:description" content="<?php echo $awp_browser_title; ?> @ Arlie's Site" />
        <meta property="og:site_name" content="Arlie's Site" />
    </head>
    <body>
        <div id="headercontainer">
            <header>
                <div class="PageTitleInnerC" style="justify-content: space-evenly;">
                    <a class="HeaderLink" href="/">About</a>
                    <a class="HeaderLink" href="/events/">Events</a>
                    <a class="HeaderLink" href="/register/">Register</a>
                    <a class="HeaderLink" href="/sponsors/">Sponsors</a>
                    <a class="HeaderLink" href="/faq/">FAQ</a>
                    <a class="HeaderLink" href="/contact/">Contact</a>
                </div>
            </header>
        </div>
        <div style="display: flex; justify-content: center;">
            <img src="/include/img/logo.png" style="width: 100%; max-width: 500px; min-width: 50px; height: auto; padding: 32px;" />
        </div>
        <article>