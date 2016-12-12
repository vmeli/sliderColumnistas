<?php
$array1 = array_slice($data,0,8);
$array2 = array_slice($data,8);
?>
<?php $x=1; ?>
<div class="row">
	<div class="col-md-16">
		<div class="block-columnistas">
			<h3 class="title"><a href="#" class="title-columnistas"></a></h3>
			<div class="slider-columnistas">
				<div class="items">
					<?php
					echo $x."entra1";
					foreach ($array1 as $key => $value):
						if($x % 5 == 0){
					?>
					</div><div class="items">
					<?php 
						}
						echo $x."entra2";
					?>
					<div class="node-columnistas">
						<a class="atm-columnista" href="<?php echo $value['url_nota'];?>" >
							<img src="<?php echo $value['imagen'];?>" alt="<?php echo $value['columnistas'];?>">									
						</a>
						<p>
							<a href="<?php echo $value['url_columna'];?>">
								<span class="author"><?php echo $value['columnista'];?></span>
							</a>
						</p>
						<h2 class="title-not">
							<a class="atm-columnista" href="<?php echo $value['url_nota'];?>"><?php echo $value['nota'];?></a>
						</h2>
					</div>
					<?php
						$x++;
					endforeach;
						echo "</div>";
					?>
				<div class="list-author">
					<p>Columnistas</p>
					<?php
					foreach ($array2 as $key => $value):
					?>
					<span><?php echo $value['columnista'];?></span>
						</ul>
					<?php
					endforeach;
					?>
				</div>				
			</div>
		</div>
	</div>
</div>
