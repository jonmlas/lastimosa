<?php 
$css_styles = get_option( 'special-heading-style');
if( !empty($css_styles) ) :
	foreach($css_styles as $id_key => $id_value)
	{
		foreach($id_value as $key => $value)
		{
			echo $value;
		}
	}
endif;
?>