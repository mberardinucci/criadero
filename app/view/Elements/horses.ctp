<div class="row">

<?php
$i = 0;
foreach ($horses as $horse):
$i++;
if (($i % 4) == 0) { echo "\n<div class=\"row\">\n\n";}
?>
<div class="col col-sm-3">
<?php echo $this->Html->image('/images/small/' . $horse['Horse']['image'], array('url' => array('controller' => 'horses', 'action' => 'view', $horse['Horse']['id']), 'alt' => $horse['Horse']['name'], 'width' => 200, 'height' => 200, 'class' => 'image')); ?>
<br />
<div>
<div class="image-info">
		<?php echo $this->Html->link($horse['Horse']['name'], array('controller' => 'horses', 'action' => 'view',  $horse['Horse']['id'])); ?>
			<br />
		<?php echo $horse['State']['name']; ?>
	</div>
</div>
<br />
<br />
</div>
<?php
if (($i % 4) == 0) { echo "\n</div>\n\n";}
endforeach;
?>

<br />
<br />

</div>
