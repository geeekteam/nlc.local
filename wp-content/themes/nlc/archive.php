<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nlc
 */

get_header();

?>

<div class="section">
	<div class="container">
		<div class="section__title">
			<div class="st-title fz50"><?php the_archive_title() ?></div>
		</div>
		<div class="section_news">
			<div class="news-grid news-grid_blog">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); get_template_part('template-parts/content-posts-grid'); endwhile;?>
			</div>
			<?php the_posts_navigation(); ?>
			<?php endif; ?>
		</div>
		<div class="pagination">
			<?php
			$category = get_queried_object();
			$category_slug = $category->slug;
			$posts_count = $category->count;
			$posts_per_page = get_option( 'posts_per_page' );
			$pages = $posts_count / $posts_per_page;
			$pages = ceil($pages);
			$current_page = get_query_var('paged');
			$last_pages_count = 3;
			$first_pages_count = 3;
			$all_pages_count = 7;
			for ($i = 0; $i < $pages; $i++) : $j = $i+1;
				$pages_array[] = $j;
			endfor;
			$last_pages = array_slice($pages_array, -$last_pages_count);
			if ($current_page > $first_pages_count) :
				$first_pages = array_slice($pages_array, $current_page-$first_pages_count, $first_pages_count);
			else :
				$first_pages = array_slice($pages_array, 0, $first_pages_count);
			endif;
			$all_last_pages = array_slice($pages_array, -$all_pages_count);
			?>
			<a href="<?php echo '/category/'. $category_slug .'/page/' . ($current_page - 1); ?>" class="pagination__prev <?php if($current_page == 0) : echo 'pagination_inactive'; endif; ?>">« Назад</a>
			<div class="pagination__items pagination-items">
				<?php if (($pages > 7) && end($first_pages) < $last_pages[0] ) : ?>
					<?php if ($first_pages) : foreach ($first_pages as $first_page) : ?>
						<a href="<?php echo '/category/'. $category_slug .'/page/' . $first_page; ?>" class="pagination-items__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($first_page == $current_page) : echo 'pagination_inactive'; endif; ?>"><?=$first_page; ?></a>
					<?php endforeach; endif; ?>
					<a href="<?php echo '/category/'. $category_slug .'/page/' . ($first_page+1); ?>" class="pagination-items__item">...</a>
					<?php if ($last_pages) :  foreach ($last_pages as $last_page) : ?>
						<a href="<?php echo '/category/'. $category_slug .'/page/' . $last_page; ?>" class="pagination-items__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($last_page == $current_page) : echo 'pagination_inactive'; endif; ?>"><?=$last_page; ?></a>
					<?php endforeach; endif; ?>
				<?php endif; ?>
				<?php if (($pages > 7) && (end($first_pages)) >= ($last_pages[0]) ) : ?>
					<?php if ($all_last_pages) : foreach ($all_last_pages as $all_last_page) : ?>
						<a href="<?php echo '/category/'. $category_slug .'/page/' . $all_last_page; ?>" class="pagination-items__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($all_last_page == $current_page) : echo 'pagination_inactive'; endif; ?>"><?=$all_last_page; ?></a>
					<?php endforeach; endif; ?>
				<?php endif; ?>
				<?php if ($pages < 7) : ?>
					<?php if ($pages_array) : foreach ($pages_array as $page_array) : ?>
						<a href="<?php echo '/category/'. $category_slug .'/page/' . $page_array; ?>" class="pagination-items__item <?php if ($current_page == 0) : $current_page += 1; endif; if ($page_array == $current_page) : echo 'pagination_inactive'; endif; ?>"><?=$page_array; ?></a>
					<?php endforeach; endif; ?>
				<?php endif; ?>
			</div>
			<a href="<?php echo '/category/'. $category_slug .'/page/' . ($current_page + 1); ?>" class="pagination__next <?php if($current_page >= $pages) : echo 'pagination_inactive'; endif; ?>">Вперед »</a>
		</div>
	</div>
</div>

<div class="section-form">
	<div class="section-form__container container">
		<div class="section-form__header">
			<div class="section-form__title">Подписывайтесь на наши новости и узнавайте всё первыми</div>
			<div class="section-form__descr">Вы будете получать на электронную почту свежие новости и информацию об акциях и скидках на программы диагностики/лечения в Южной Корее</div>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1" html_class="form-request"]'); ?>
	</div>
</div>

<?php
get_sidebar();
get_footer();
