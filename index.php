<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
        <div class="row block03">

    
<?php if($redux_demo['layout_select']==3): ?>
    		<div class="col-2-3">
				<div class="wrap-col">


                    <?php while (have_posts()): the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    

						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y'); ?> with <?php comments_popup_link('No Comment','One Comment','% Comments','Shaikat','Comments off'); ?>]</div>


						<?php read_more(32); ?>...<a href="<?php the_permalink(); ?>">read more</a>
                    <?php $prefix = "_pre_";  ?>
                    <h1>Name: <?php echo get_post_meta($post->ID, 'meta_key' ,true); ?></h1>
                    <h1>Cmb2: <?php echo get_post_meta($post->ID, $prefix.'new_metabox_text' ,true); ?></h1>
                    <h1>Cmb2: <?php echo get_post_meta(get_the_ID(), $prefix.'new_metabox_wysiwyg' ,true); ?></h1>
                    <h1>Text-Area: <?php echo get_post_meta(get_the_ID(), $prefix.'new_metabox_textarea' ,true); ?></h1>
                    <h1>Money: <?php echo get_post_meta($post->ID, $prefix.'new_metabox_money' ,true); ?></h1>
                    <h1>Category: <?php
                        $Category = get_the_category();

                        foreach ($Category as $Categories) {
                         	echo $Categories->name;
                         } 
                    ?></h1>
                    
                    <h1>Cmb2: <?php echo get_post_meta(get_the_ID(), $prefix.'new_metabox_radio' ,true); ?></h1>
                    <h1><?php 
                    $filelists = get_post_meta(get_the_ID(), $prefix.'new_metabox_file_list' ,true);
                    if($filelists)
                    {
                    foreach ($filelists as $filelist ) 
                    { ?>
                    	<img src="<?php echo $filelist; ?>"> 
                    <?php }
                    }
                    ?></h1>
					</article>

                    <?php endwhile; ?>
                   <div id="pagi">
                    <?php the_posts_pagination(array(
                         'show_all'=>false,
                    	 'prev_text' => __( 'Prev', 'zboom' ),
                         'next_text' => __( 'Next', 'zboom' ),
                         'screen_reader_text'=>' ',
                         'before_page_number'=>'',
                         'after_page_number'=>'',
                    )); ?>

				   </div>
				</div>
			</div>
			<div class="col-1-3">
				
					<?php get_sidebar(); ?>
				
			</div>
<?php endif; ?> 



<?php if($redux_demo['layout_select']==2): ?>


            <div class="col-1-3">
				
					<?php get_sidebar(); ?>
				
			</div>
    			
			<div class="col-2-3">
				<div class="wrap-col">


                    <?php while (have_posts()): the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y'); ?> with <?php comments_popup_link('No Comment','One Comment','% Comments','Shaikat','Comments off'); ?>]</div>



						<?php read_more(32); ?>...<a href="<?php the_permalink(); ?>">read more</a>


					</article>

                    <?php endwhile; ?>
                   <div id="pagi">
                    <?php the_posts_pagination(array(
                         'show_all'=>false,
                    	 'prev_text' => __( 'Prev', 'zboom' ),
                         'next_text' => __( 'Next', 'zboom' ),
                         'screen_reader_text'=>' ',
                         'before_page_number'=>'',
                         'after_page_number'=>'',
                    )); ?>

					</div>
				</div>
			</div>
<?php endif; ?>   




<?php if($redux_demo['layout_select']==1): ?>

            <div class="col-3-3">
				<div class="wrap-col">


                    <?php while (have_posts()): the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y'); ?> with <?php comments_popup_link('No Comment','One Comment','% Comments','Shaikat','Comments off'); ?>]</div>



						<?php read_more(32); ?>...<a href="<?php the_permalink(); ?>">read more</a>


					</article>

                    <?php endwhile; ?>
                   <div id="pagi">
                    <?php the_posts_pagination(array(
                         'show_all'=>false,
                    	 'prev_text' => __( 'Prev', 'zboom' ),
                         'next_text' => __( 'Next', 'zboom' ),
                         'screen_reader_text'=>' ',
                         'before_page_number'=>'',
                         'after_page_number'=>'',
                    )); ?>

					</div>
				</div>
			</div>

<?php endif; ?>








      </div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>