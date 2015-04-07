<?php
	$custom_style = '';
	$badge_type = $atts['badge_type'];
	$alignment = $atts['alignment'];
	if($alignment == 'left') $custom_style = 'float: left;';
	if($alignment == 'right') $custom_style = 'float: right;';
	if($alignment == 'center') $custom_style = 'margin: auto;';
?>
<div class="wordcamp_belohorizonte_badge" style="<?php echo $custom_style; ?>">
	<?php
		if($badge_type == 'attending'):
	?>
			<a href="http://belohorizonte.wordcamp.org/2015/"><img src="http://belohorizonte.wordcamp.org/2015/files/2015/04/wordcampbh_badge_participante.png" alt="Eu vou Participar do WordCamp Belo Horizonte 2015" title="Eu vou Participar do WordCamp Belo Horizonte 2015" width="300" height="300" /></a>
	<?php
		elseif($badge_type == 'speaking'):
	?>
			<a href="http://belohorizonte.wordcamp.org/2015/"><img src="http://belohorizonte.wordcamp.org/2015/files/2015/04/wordcampbh_badge_palestrante.png" alt="Eu vou Palestrar no WordCamp Belo Horizonte 2015" title="Eu vou Palestrar no WordCamp Belo Horizonte 2015" width="300" height="300" /></a>
	<?php
		elseif($badge_type == 'sponsor'):
	?>
	<a href="http://belohorizonte.wordcamp.org/2015/"><img src="http://belohorizonte.wordcamp.org/2015/files/2015/04/wordcampbh_badge_patrocinador.png" alt="Eu sou Patrocinador do WordCamp Belo Horizonte 2015" title="Eu sou Patrocinador do WordCamp Belo Horizonte 2015" width="300" height="300" /></a>
	<?php
		elseif($badge_type == 'volunteer'):
	?>
			<a href="http://belohorizonte.wordcamp.org/2015/"><img src="http://belohorizonte.wordcamp.org/2015/files/2015/04/wordcampbh_badge_voluntario.png" alt="Eu sou Voluntário do WordCamp Belo Horizonte 2015" title="Eu sou Voluntário do WordCamp Belo Horizonte 2015" width="300" height="300" /></a>
	<?php
		endif;
	?>
</div>