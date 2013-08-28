

<p><strong><?php _e('چیزی یافت نشد', 'avia_framework'); ?></strong><br/>

<?php _e('متاسفانه صفحه‌ای که به دنبال آن بودید در دسترس نیست، در صورت تمایل می‌توانید از جستجو استفاده کنید:', 'avia_framework'); ?>
</p>
<?php 
		
		if(isset($_GET['post_type']) && $_GET['post_type'] == 'product' && function_exists('get_product_search_form'))
		{
			get_product_search_form();
		}
		else
		{
			get_search_form(); 
		}

?>



<div class='hr_invisible'></div>  

<p><?php _e('برای حاصل شدن نتیجه‌ی بهتر به توصیه‌های زیر توجه کنید:', 'avia_framework'); ?></p>
<ul class='borderlist-not'>
	<li><?php _e('همیشه به املای صحیح کلمات توجه نمایید.', 'avia_framework'); ?></li>
	<li><?php _e('از کلمات کلیدی مشابه هم استفاده نمایید، به عنوان مثال تبلت به جای لپ‌تاپ.', 'avia_framework'); ?></li>
	<li><?php _e('سعی کنید بیش از یک کلمه کلیدی استفاده نمایید.', 'avia_framework'); ?></li>
</ul>

<div class='hr_invisible'></div>

<h3 class=''><?php _e('', 'avia_framework'); ?></h3>

<?php
the_widget('avia_combo_widget', 'error404widget', array('widget_id'=>'404',
        'before_widget' => '<div class="widget avia_combo_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
?>