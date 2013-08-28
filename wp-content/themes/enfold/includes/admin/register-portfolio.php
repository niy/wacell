<?php
add_action('init', 'portfolio_register');

function portfolio_register()
{
	global $avia_config;

	$labels = array(
		'name' => _x('محصولات و خدمات', 'post type general name','avia_framework'),
		'singular_name' => _x('محصول', 'post type singular name','avia_framework'),
		'add_new' => _x('اضافه کردن', 'portfolio','avia_framework'),
		'add_new_item' => __('اضافه کردن محصول جدید','avia_framework'),
		'edit_item' => __('ویرایش','avia_framework'),
		'new_item' => __('اضافه کردن محصول جدید','avia_framework'),
		'view_item' => __('نمایش محصول','avia_framework'),
		'search_items' => __('جستجو در محصولات','avia_framework'),
		'not_found' =>  __('هیچ محصولی یافت نشد.','avia_framework'),
		'not_found_in_trash' => __('هیچ محصولی در زباله‌دان یافت نشد.','avia_framework'),
		'parent_item_colon' => ''
	);

	$slugRule = avia_get_option('portfolio-slug');

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array('slug'=>$slugRule,'with_front'=>true),
		'query_var' => true,
		'show_in_nav_menus'=> true,
		'taxonomies' => array('post_tag'),
		'supports' => array('title','thumbnail','excerpt','editor','comments')
	);

	$avia_config['custom_post']['portfolio']['args'] = $args;

	register_post_type( 'portfolio' , $args );


	register_taxonomy("portfolio_entries",
		array("portfolio"),
		array(	"hierarchical" => true,
		"label" => "دسته‌بندی محصولات",
		"singular_label" => "دسته‌بندی محصولات",
		"rewrite" => true,
		"query_var" => true
	));
}

#portfolio_columns, <-  register_post_type then append _columns
add_filter("manage_edit-portfolio_columns", "prod_edit_columns");
add_filter("manage_edit-post_columns", "post_edit_columns");
add_action("manage_posts_custom_column",  "prod_custom_columns");


function post_edit_columns($columns)
{
	$newcolumns = array(
		"cb" => "<input type=\"checkbox\" />",
		"thumb column-comments" => "تصویر",
	);

	$columns= array_merge($newcolumns, $columns);

	return $columns;
}

function prod_edit_columns($columns)
{
	$newcolumns = array(
		"cb" => "<input type=\"checkbox\" />",
		"thumb column-comments" => "تصویر",
		"title" => "عنوان",
		"portfolio_entries" => "دسته‌بندی‌ها"
	);

	$columns= array_merge($newcolumns, $columns);

	return $columns;
}

function prod_custom_columns($column)
{
	global $post;
	switch ($column)
	{
		case "thumb column-comments":
		if (has_post_thumbnail($post->ID)){
				echo get_the_post_thumbnail($post->ID, 'widget');
			}
		break;

		case "description":
		#the_excerpt();
		break;
		case "price":
		#$custom = get_post_custom();
		#echo $custom["price"][0];
		break;
		case "portfolio_entries":
		echo get_the_term_list($post->ID, 'portfolio_entries', '', ', ','');
		break;
	}
}
?>