<link rel="stylesheet" href="CSS/ParallaxStyle.css">
<script src="JS/ParallaxMuscle.js"></script>
<?php

/**
 * Generates a parallax container with an image background and overlay content.
 * 
 * This function creates an HTML structure for a parallax effect. Each container
 * is uniquely identified by an index, which allows the associated JavaScript 
 * to control the parallax effect accurately. 
 * 
 * It is vital to **keep track of the index** when using this function to ensure
 * that the JavaScript can uniquely target and control each parallax object on 
 * the page. Failing to do so may result in incorrect or overlapping behavior.
 * 
 * @param string $src   The source URL of the background image for the parallax.
 *                      Default is an empty string.
 * @param int    $index A unique index that identifies the parallax container
 *                      and its related elements.
 * 
 * @return string       Returns the complete HTML structure for a parallax object.
 */
function createParallax($src, $description, $index)
{
    return <<<HTML
<div class='parallax-container' id='parallax-container-{$index}'>
    <img class='parallax-background' src='{$src}' id='parallax-background-{$index}'>
    <div class='overlay-content' id='overlay-content-{$index}'>
        <div class='member' id='member-{$index}'>
            <div class='member-text' id='member-text-{$index}'>
                <span id='member-description-{$index}'>$description</span>
                <div style='options'>
                </div>
            </div>
        </div>
    </div>
</div>    
HTML;
}
?>