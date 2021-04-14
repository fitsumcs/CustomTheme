<?php 
// adds default header or from header.php
get_header();
?>
<div class="container mt-2">
<?php
if(have_posts()){
    while(have_posts()){
        the_post()?>
        <h1> <a href="<?php the_permalink()?>"><?php the_title()?></a></h1>
        <?php 
        
        // check if the post has a Post Thumbnail assigned to it.
        if ( has_post_thumbnail() ) {
	     the_post_thumbnail();
         } 

        the_content()
        
        ?>
    <?php }
     

}
?>
</div>

<?php
// adds default footer or from footer.php
get_footer();
  
?>

