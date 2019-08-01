<?php
/**
 * Template Name: page-submit 
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="submitQuoteSection">
         <?php if ( is_user_logged_in() ) { ?>
            
             <div class=submit-page>
                <form id="quote-submit-form"  method='POST'>
					Author of Quote <br>
					<input type="text" id ="author-name" name="author"><br>
					Quote <br> 
					<input type="text" id= "submit-quote" name="quote"><br>
					Where did you find this quote? (e.g. book name) <br>
					<input type="text" id="find-quote" name="findquote" value=""><br>
					Provide the URL of the quote source, if available.<br>
					<input type="text" id="quote-source" name="quotesource" value=""><br>
                    <input type="submit" id= "submitButton" value="Submit Quote">
                </form>
            </div>

    <?php } else { ?>
      
        <div class="login-page">
            <div class="login-message">  
                 <p>Sorry, you must be logged in to submit a quote!</p>
                 <a href="http://localhost/project5/quotesondev/wp-login.php?">Click here to login.</a> 
            </div>
    
    <?php } ?>

    
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
