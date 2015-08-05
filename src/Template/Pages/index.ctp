<section id="blog-section">
    <div class="container">
        <?php echo $this->element('Pages/sidebar');?>
        <div class="col-md-9">
        	<article class="onscroll-animate">
                <?php foreach ($posts as $post) { ?>
            	<div class="blog-post">
                	<div class="blog-post-header">
            			<h1><a href="<?php echo $this->Url->build("/{$post->slug}");?>"><?php echo __($post->title);?></a></h1>
                        <div class="blog-post-info">
                            <a href="#">
                                <?php echo $this->Time->format($post->created, 'dd.MM.Y');?>
                            </a>
                        </div>
                    </div>
                    <?php echo $post->summary;?>            		
                    <div class="blog-post-footer">
                        <a class="read-more-link" href="<?php echo $this->Url->build("/{$post->slug}");?>">Read more</a>
                    </div>
                </div>
                <?php } ?>
        	</article>
        </div>
    </div>
</section>