<?php if ( function_exists( 'icl_get_languages' ) ) : ?>
	<?php $languages = icl_get_languages(); ?>	
	<ul>
		<?php foreach ( $languages as $lang ) : ?>
			<li<?php if ( $lang['active'] ) : ?> class="active"<?php endif; ?>>
				<a href="<?php echo $lang['url']; ?>"><?php echo $lang['native_name']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
