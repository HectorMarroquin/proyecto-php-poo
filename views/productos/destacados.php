<!--Contenido Central-->
	<h1>Alguno de nuestros productos</h1>
	<?php while ($product = $productos->fetch_object()) :?>
		
			<div class="product">
				<a href="<?=base_url?>Producto/ver&id=<?=$product->id?>">

					<?php if($product->imagen != null) : ?>
						<img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
					<?php else : ?>
						<img src="<?=base_url?>assets/img/camiseta.png">
					<?php endif; ?>
				</a>
			<h2><?=$product->nombre?></h2>
			<p><?=$product->precio?></p>
			<a href="#" class="button">Comprar</a>
		</div>
		
<?php endwhile; ?>