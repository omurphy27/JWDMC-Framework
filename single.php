<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-8 clearfix" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

							<header>
								<?php the_post_thumbnail( 'jwdmc-featured' ); ?>

								<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>

								<p class="meta"><?php _e("Posted on", "jwdmc"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" itemprop="datePublished" pubdate><?php the_time('F j, Y'); ?></time> <?php _e("by", "jwdmc"); ?> <span class="author-link" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><?php the_author_posts_link(); ?></span> &amp; <?php _e("filed under", "jwdmc"); ?> <?php the_category(', '); ?>.</p>
							</header> <!-- end article header -->

							<section class="post_content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
								<?php wp_link_pages(); ?>
							</section> <!-- end article section -->

							<footer>
								<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","jwdmc") . ':</span> ', ' ', '</p>'); ?>

								<?php
								// only show edit button if user has permission to edit posts
								if( $user_level > 0 ) {
								?>
								<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-default edit-post"><?php _e("Edit post","jwdmc"); ?></a>
								<?php } ?>

							</footer> <!-- end article footer -->

						</article> <!-- end article -->

						<?php comments_template('',true); ?>

					<?php endwhile; else : ?>

						<article id="post-not-found">
							<header>
								<h1><?php _e("Not Found", "jwdmc"); ?></h1>
							</header>
							<section class="post_content">
								<p><?php _e("Sorry, but the requested resource was not found on this site.", "jwdmc"); ?></p>
							</section>
						</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>