<?php

    /*
        render_page -- build a page with custom settings
    */

    function render_page($site_title, $page_title, $content) {
        
        return '
            <!DOCTYPE html>
            <html lang="en">
                <head>

                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>

                    <link rel="icon" type="/bacs350/images/myFavicon.png">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://shrinking-world.com/static/css/unc.css">

                </head>
                <body>

                    <header>

                        <img src="/bacs350/images/Bear.200.png" alt="Bear Logo"/>
                        <h1>' . $site_title . '</h1>
                        <h2>' . $page_title . '</h2>

                    </header>
                    <main>

                        ' . $content . '

                    </main>
                </body>
            </html>
        ';

    }

?>
