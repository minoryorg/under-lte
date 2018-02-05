<style>
#under-lte-custom td a {
	padding: 15px;
	color: #fff;
	font-size: 1.2em;
	font-weight: bold;
	line-height: 1.8em;
	text-align: center;
	text-decoration: none;
	display: block;
}
#under-lte-custom td.skin-blue a         {background: #367fa9; border: 1px solid #367fa9;}
#under-lte-custom td.skin-blue-light a   {color: #367fa9; border: 1px solid #367fa9;}
#under-lte-custom td.skin-yellow a       {background: #e08e0b; border: 1px solid #e08e0b;}
#under-lte-custom td.skin-yellow-light a {color: #e08e0b; border: 1px solid #e08e0b;}
#under-lte-custom td.skin-green a        {background: #008d4c; border: 1px solid #008d4c;}
#under-lte-custom td.skin-green-light a  {color: #008d4c; border: 1px solid #008d4c;}
#under-lte-custom td.skin-purple a       {background: #605ca8; border: 1px solid #605ca8;}
#under-lte-custom td.skin-purple-light a {color: #605ca8; border: 1px solid #605ca8;}
#under-lte-custom td.skin-red a          {background: #d73925; border: 1px solid #d73925;}
#under-lte-custom td.skin-red-light a    {color: #d73925; border: 1px solid #d73925;}
#under-lte-custom td.skin-black a        {background: #111111; border: 1px solid #111111;}
#under-lte-custom td.skin-black-light a  {color: #111111; border: 1px solid #111111;}
<?php if ( get_option('color') ): ?>
#under-lte-custom td.<?php echo get_option('color'); ?> {background: #aaa;}
<?php endif; ?>
</style>

<div id="icon-themes" class="icon32"></div>

<h1><?php echo esc_attr__( 'Theme Options' ); ?></h1>

<?php if ( get_option('color') ): ?>
<p>Theme of the currently selected is "<b><?php echo ucfirst(get_option('color')); ?></b>".</p>
<?php else: ?>
<p>Please select a color.</p>
<?php endif; ?>

<div class="wrap">
	<table id="under-lte-custom" width="100%" cellpadding="10" cellspacing="0" border="0">
		<tr>
			<td width="50%" class="skin-blue">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-blue">skin-blue</a>
			</td>
			<td width="50%" class="skin-blue-light">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-blue-light">skin-blue-light</a>
			</td>
		</tr>
		<tr>
			<td width="50%" class="skin-yellow">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-yellow">skin-yellow</a>
			</td>
			<td width="50%" class="skin-yellow-light">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-yellow-light">skin-yellow-light</a>
			</td>
		</tr>
		<tr>
			<td width="50%" class="skin-green">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-green">skin-green</a>
			</td>
			<td width="50%" class="skin-green-light">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-green-light">skin-green-light</a>
			</td>
		</tr>
		<tr>
			<td width="50%" class="skin-purple">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-purple">skin-purple</a>
			</td>
			<td width="50%" class="skin-purple-light">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-purple-light">skin-purple-light</a>
			</td>
		</tr>
		<tr>
			<td width="50%" class="skin-red">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-red">skin-red</a>
			</td>
			<td width="50%" class="skin-red-light">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-red-light">skin-red-light</a>
			</td>
		</tr>
		<tr>
			<td width="50%" class="skin-black">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-black">skin-black</a>
			</td>
			<td width="50%" class="skin-black-light">
				<a href="<?php bloginfo('url'); ?>/wp-admin/themes.php?page=functions.php&color=skin-black-light">skin-black-light</a>
			</td>
		</tr>
	</table>
</div>
