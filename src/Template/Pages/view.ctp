<section id="blog-section">
    <div class="container">
        <div class="col-md-12">
        	<article>
            	<div class="blog-post">
                	<div class="blog-post-header">
            			<h1><?php echo $post->title;?></h1>
                        <div class="blog-post-info">
                            <?php echo $this->Time->format($post->published, 'dd.MM.Y');?>
                        </div>
                    </div>
                    <?php echo $post->body;?>
                    <div class="blog-post-footer onscroll-animate">
                        <?php if (!empty ($post->tags)) {  ?>
                    	<div class="blog-post-tags">
                        	Tags: <span class="blog-post-tag"><?=$post->list_tags;?></span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
        	</article>
        </div>
    </div>
</section>