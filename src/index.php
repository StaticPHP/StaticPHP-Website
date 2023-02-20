<?php

$current_page = "home";

$page_content = function()
{
?>

        <section class="w3-padding-32">
            <div class="w3-content w3-padding">
                <p><img src="/assets/images/StaticPHP-Promo1.png" alt="Static PHP Promo Image"></p>
                <h2>Welcome to StaticPHP!</h2>
                <p>A simple Static Site Generator (SSG) written in PHP. It turns PHP files into HTML files.</p>
                <p><a href="https://github.com/DavidHunterScot/StaticPHP" target="_blank">Available on GitHub</a></p>

                <h3>What is a Static Site?</h3>
                <p>A static site is where the website content is controlled solely by the developer/owner of said website, and does not depend on any other influences like access to a database, server side processing, or user input such as a search feature, or authentication and authorisation.</p>

                <h3>Why did I make StaticPHP?</h3>
                <p>For many years, I have been making websites that are basically static, but were powered by PHP to make some tasks easier, such as maintaining the same design and layout across all pages, making it easy to update site-wide navigation, and some things like conditionals and loops to save duplicating code and to save time.</p>
                <p>It wasn't until 2022 that I realised how much energy was being wasted by the server preparing and generating each page for each request when it didn't have to. I found a better way to make these static sites, and that was to use a Static Site Generator.</p>
                <p>After some time trying out an SSG I found online, it wasn't long before I started missing coding in PHP, because that's what I've been doing all along, so I made the decision to develop my very own static site generator to suit my needs, and hopefully suit yours too.</p>

                <h3>Why use StaticPHP?</h3>
                <p>It gives you the freedom to code your site however you want, using whatever PHP code you want, which lets you be efficient during development, while deploying a fully static site to your hosting server. If you don't generate the static site on the server, then the server itself does not need PHP installed for your site to work.</p>

                <h3>How does StaticPHP work?</h3>
                <p>It takes any PHP file and processes it. Except without presenting the output onto the screen, it saves the output to a file. Any non-PHP file is simply copied to the designated output directory, so your asset files like images and CSS etc will still work fine.</p>
                <p>You can set Friendly URLs to true to have the output be an index.html file placed inside a folder with the same name as the input file minus the extension. This lets you have urls such as <code>domain.tld/page</code> instead of <code>domain.tld/page.html</code>. This setting can be overridden on a per-page basis by setting the boolean variable <code>$friendly_urls</code> to whatever value you wish for this file.</p>
            </div>
        </section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . '_includes' . DIRECTORY_SEPARATOR . 'base.php';
