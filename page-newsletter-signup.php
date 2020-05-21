<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roe
 */

get_header();
?>

<section class="newsletter-signup">
    <div class="wrapper rounded6" id="templateContainer">
    		
        <h2 class="canela">Newsletter</h2>
        
		<div id="templateBody" class="bodyContent rounded6">
            <div>Sign up for occasional updates, resources, and cool little things.</div>

            <form action="https://helloroe.us19.list-manage.com/subscribe/post" method="POST">
                <input type="hidden" name="u" value="974bca3620a3d97849355fea4">
                <input type="hidden" name="id" value="32b3d4ffeb">

                <div id="mergeTable" class="mergeTable">  
                    <div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
                        <label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
                        <div class="field-group">
                            <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
                        </div>
                    </div>
                </div>

                <div class="submit_container clear">
                    <input type="submit" class="formEmailButton" name="submit" value="Subscribe">
                </div>
                <input type="hidden" name="ht" value="92cf1a9a55d2b0192be3f61640692dfa6bda4581:MTU4MzQ0MjM2OS4xODM2">
                <input type="hidden" name="mc_signupsource" value="hosted">
            </form>
        </div>
    </div>
</section>

<?php
// get_sidebar();
// get_footer();
