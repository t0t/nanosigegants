


<aside class="sidebar">

    <?php if ( is_single() ) : ?>

        <?php get_sidebar('single'); ?>
        
    <?php elseif ( is_page() ) : ?>
        
        <?php get_sidebar('page'); ?>

    <?php //elseif ( is_page_template() ) : ?>
        
        <?php //get_sidebar('page-template.php'); ?>

    <?php else : ?>
    <p>ups, no sidebar!</p>   
    <?php endif; ?>

    <footer class="widget widget--newsletter">

			<form action="//nanosigegants.us10.list-manage.com/subscribe/post?u=f12298f0773d67aadf06c2fc4&amp;id=a1594d1567" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

				<p>Subscribe to our mailing list</p>

				<label for="mce-EMAIL"></label>
				<input type="email" value="" name="EMAIL" placeholder="Tu email aquí" id="mce-EMAIL">
				
				<div id="mce-responses"><div id="mce-error-response" style="display:none"></div><div id="mce-success-response" style="display:none"></div></div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

			    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

			</form>

    </footer>

</aside>