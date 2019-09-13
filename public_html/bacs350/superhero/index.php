<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = 'Superheroes';
    
    $content = '
        <p> 
            This page is a demonstration of the pattern in use.
        </p>
        <p> 
            This page was created with a reusable HTML template that contains custom data.
        </p>
        <p> 
            Any custom data has been defined as variables and included within the template.
        </p>
        <p> 
            A function as been called that return this HTML with the custom data passed as parameters.
        </p>
        <p>
            A lot of different parts have come together to create the page that you are reading right now.
        </p>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>