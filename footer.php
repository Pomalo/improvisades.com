<!-- begin footer -->

<?php wp_footer(); ?>
</div>
</div>
<ul id="navigation_foot">
	<?php wp_list_pages('include=16,18&sort_column=ID&title_li=');?>
	<li class="last"><a href="http://www.improvisades.com/?page_id=20">liens</a></li>
</ul>
<p id="footer">&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>, tous droits réservés, utilise <a href="http://wordpress.org/">WordPress</a>, contactez le <a href="mailto:ouardane_at_noos.fr">Webmaster</a></p>
</body>
</html>