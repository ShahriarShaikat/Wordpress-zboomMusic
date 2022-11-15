<?php 

/*
Template Name:Contact
*/

get_header(); 

?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">


					
			    <?php
                $asdfg = array('i', 'am', 'Shaikat');
                echo implode(" ", $asdfg);
                ?>

					<?php while(have_posts()): the_post(); ?>
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d,Y'); ?> with <?php comments_popup_link('No Comment','One Comment','% Comments','Shaikat','Comments off'); ?>]</div>
					
						<?php the_content(); ?>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<?php comments_template(); ?>
						</div>
                

                

					</article>

					
                    <?php endwhile; ?>
                    <h1>Tag name :
                    <?php
                   
                    $tag = get_tag($redux_demo['radio_select']);
                    echo $tag->name;
                    ?>
                    </h1>

                   <h1>Categories :
                    
                     <?php
                     $i = 0;
                    
                     if ($redux_demo['select_select']) 
                     {
                        $length = count($redux_demo['select_select']);
                       ?> <ul> <?php
                         while ( $i < $length): ?>  

                    <li><?php echo get_the_category_by_ID($redux_demo['select_select'][$i]); $i++; ?></li>

                    <?php endwhile; ?>
                    </ul>
                    </h1> <?php
                     }
                     else
                    echo "No category Selected"; 
                    ?> 


                    <h1>Category name :
                    <?php
                
                    $ta = $redux_demo['select_select'];
                    if ($ta) 
                    {
                    ?> <ul> <?php
                       foreach ($ta as $key ) 
                    {
                      ?> <li> <?php echo get_the_category_by_ID($key); echo " [ID-:". $key."]";   ?> </li> <?php
                    } ?> </ul> <?php
                    }
                    else
                    echo "No category Selected";  
                    
                    ?> 
                   
                    
                    </h1>
                    
<!--------------Content-----------------
                
---------------------------------------->                   

				</div>
			</div>
			<div class="col-1-3">

								<div id="contact_sidebar" class="wrap-col">

					               <?php dynamic_sidebar('contact_sidebar'); ?>
    
				               </div>
			
			<div class="listclass">
			    <div class="listclass_content">
                    <div class="heading"><h2>Food Item</h2></div>

				    <div class="listclass_onlycontent">
                                    <?php $count=1 ?>

                                    <?php if($redux_demo['food_select']['1']==1): ?>
                               <li><?php echo  $count;$count=$count+1; ?>.Apple</li>
                                    <?php endif; ?>

                                    <?php if($redux_demo['food_select']['2']==1): ?>
                               <li><?php echo  $count;$count=$count+1; ?>.Banana</li>
                                    <?php endif; ?>

                                    <?php if($redux_demo['food_select']['3']==1): ?>
                               <li><?php echo  $count;$count=$count+1; ?>.Mango</li>
                                    <?php endif; ?>

                                    <?php if($redux_demo['food_select']['4']==1): ?>
                               <li><?php echo  $count;$count=$count+1; ?>.Jackfruit</li>
                                    <?php endif; ?>

                                    <?php if($redux_demo['food_select']['5']==1): ?>
                               <li><?php echo  $count;$count=$count+1; ?>.Lichu</li>
                                    <?php endif; ?>
				    </div>
			    </div>
            </div>

<!---------***************************Multi-Text***************************--------->
            <?php 
            $found=false;
            $hdgd=0;
            while($hdgd<100) 
            {
             	if(strlen($redux_demo['setsmulti_text'][$hdgd])>0){$found=true;}
             	$hdgd=$hdgd+1;
            } 
            ?> 
            <?php if($found==true): ?>
			<div class="listclass">
			    <div class="listclass_content">
                    <div class="heading"><h2>Multi Text</h2></div>

				    <div class="listclass_onlycontent">
                                    <?php $lop=0;while ($lop<100): ?>

                                    <p><?php  echo  $redux_demo['setsmulti_text'][$lop];$lop=$lop+1;?></p>

                                    <?php  endwhile;?>

				    </div>
			    </div>
            </div>
            <?php endif; ?>
<!---------***************************Multi-Text-End***************************--------->
            <?php 
            $found=false;
            $hdgd=1;
            while($hdgd<3) 
            {
             	if(strlen($redux_demo['texttext'][$hdgd])>0){$found=true;}
             	$hdgd=$hdgd+1;
            } 
            ?> 
            <?php if($found==true): ?>			
            <div class="listclass">
			      <div class="listclass_content">
                    <div class="heading"><h2>Social Icon</h2></div>

				    <div class="listclass_onlycontent">
                        <?php if(strlen($redux_demo['texttext']['1'])>0): ?>   
                        <li><a href="<?php echo $redux_demo['texttext']['1']; ?>"><i class="fa fa-facebook">.Facebook</i></a></li>
                        <?php endif; ?>
                        <?php if($redux_demo['texttext']['2']): ?>     
                        <li><a href="<?php echo $redux_demo['texttext']['2']; ?>"><i class="fa fa-youtube">.YouTube</i></a></li>
                        <?php endif; ?>      

				    </div>
			    </div>
            </div>
            <?php endif; ?>



            <div class="listclass">

                 <?php dynamic_sidebar('list_sidebar'); ?>

            </div>

           </div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>