<section id="blog-section">
    <div class="container">
        <?php foreach ($posts as $post) { ?>
        <div class="col-md-4">
        	<article class="onscroll-animate">
            	<div class="blog-post" style="min-height: 350px; max-height: 350px;">
                	<div class="blog-post-header">
            			<h1><a href="<?php echo $this->Url->build("/{$post->slug}");?>"><?php echo __($post->title);?></a></h1>
                        <div class="blog-post-info">
                            <a href="#">
                                <?php echo $this->Time->format($post->published, 'dd.MM.Y');?>
                            </a>
                        </div>
                    </div>
                    <?php echo $post->summary;?>            		
                    <div class="blog-post-footer">
                        <?php if (!empty ($post->tags)) {  ?>
                        <div class="blog-post-tags">
                            Tags: <span class="blog-post-tag"><?=$post->list_tags;?></span>
                        </div>
                        <br />
                        <?php } ?>
                        <a class="read-more-link" href="<?php echo $this->Url->build("/{$post->slug}");?>">Leia mais</a>
                    </div>
                </div>
                
        	</article>
        </div>
        <?php } ?>
    </div>
</section>