<?php
abstract class Test{
	
	function show(array $show){
		echo '<div class="container">';
		foreach($show as $name => $content):
		echo '<div class="description">
					<strong class="label">'.$name . '</strong>
					<span class="resposte">
						'.$content. '
					</span>
				  </div>';
		endforeach;
		echo '</div>';
	}
	
	function show_habilidades(array $show){
		echo '<div class="container_habilidades">';
		foreach($show as $name => $content):
		echo '<div class="description"><strong class="label">'.$name . '</strong> <span class="resposte">'.$content. '</span> </div>';
		endforeach;
		echo '</div>';
	}
}