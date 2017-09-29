<table>
	<caption>test</caption>
	<?php $i=1;?>
	<?php foreach($products as $product => $cost): ?>
	<tr>
		<td><?php echo $i.'.';?></td>
		<td><?php echo $product;?></td>
		<td><?php echo $cost;?></td>
		<?php $i++;?>
	</tr>
<?php endforeach ?>
</table>