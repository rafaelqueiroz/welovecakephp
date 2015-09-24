<section id="gallery-section">
    <div class="center-logo onscroll-animate" data-delay="800">
    	<?php echo $this->Html->image('http://cakephp.org/img/default/cake-logo-smaller.png');?>
    </div>
	<div class="container">
        <div class="col-md-5">
            <article class="gallery-info">
                <div class="article-header-5">
                    <div class="price-label onscroll-animate" data-delay="500">
                        <span class="price-label-content">R$299,90</span>
                    </div>
                    <h1>CakePHP 3</h1>
					<h2>Boa Viagem, Recife - PE</h2>
                    <span class="highlight">
                        25 Setembro<br />
                        9:00 am - 5:00 pm
                    </span>
                </div>
                <div class="margin-20"></div>
                <p>O curso e destinado para desenvolvedores do framework, ou que tenham conhecimento de desenvolvimento de aplicacoes MVC.</p>
                <p>O curso tem duração de 5 - 6 horas.</p>
				<h2>Ingredientes</h2>
				<ul class="list-numbers">
                    <li>Instalação, começando com o Composer</li>
                    <li>Estrutura de arquivos do projeto</li>
                    <li>Convenções e Configurações do CakePHP 3</li>
                    <li>Assando, criando seu primeiro projeto</li>
                    <li>Introdução ao novo ORM, Tables e Entities</li>
                    <li>Criando Controllers e implementando callbacks</li>
                    <li>Requisições e Respostas objects</li>
                    <li>Usando Components</li>
                    <li>Construindo views e layouts</li>
                    <li>Manipulando elements e Helpers (Html, Form)</li>
                    <li>Usando Plugins</li>
                    <li>Debugando seu código</li>
                </ul>				                
                <div class="row">
                	<div class="col-xs-6">
                		<h2>Pré-requisitos</h2>
                    	<div class="item-check">PHP</div>
                    	<div class="item-check">Orientação a Objetos</div>
                    </div>                
                    <div class="col-xs-6">    
                    	<h2>Data / Local</h2>
                    	<div class="item-check">17 Outubro - 09:00</div>
                    	<div class="item-check">
                    		<a href="https://goo.gl/maps/v6iCq" target="_blank">Boa Viagem, Recife - PE</a>
                    	</div>
                    </div>
                </div>
            </article>
            <div class="margin-20"></div>
			<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
				<input type="submit" style="display:none"/>
				<input type="hidden" name="code" value="<?=$code;?>" />
			</form>
			<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
            <a class="button" href="#" onclick="document.forms[0].elements[0].click();">Matricule-se <i class="fa fa-long-arrow-right"></i></a>
            <div class="margin-20"></div>
	        <p class="info">
	        	Mais informações entre em contato rafaelfqf@gmail.com.<br/>
	        	O conteúdo do curso pode ser sujeito a alterações.
	       	</p>
	       	<p class="info"></p>
        </div>
        <div class="col-md-6 col-md-offset-1 onscroll-animate">
            <div id="gallery-slider" class="gallery-slider">            	
                <?php
                    for ($i = 1; $i <= 4; $i++) {
                        echo $this->Html->image("training/img{$i}.jpg", ['class' => 'img-responsive', 'style' => 'height:350px;']);
                    }
                ?>
            </div>
        </div>

    </div>
</section>