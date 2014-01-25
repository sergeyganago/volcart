new news
<table>
<? foreach($news as $new): ?>
<tr>
<td>
<? $imgstring=$new->image;
	 $images=explode(':', $imgstring);	?>	
<? foreach($images as $img): ?> 
<div><?=HTML::image('media/uploads/'.$img.'/');?></div>
<? endforeach;?>

</td>
<td width='100'>
</td>
<td>
<h2><?=HTML::anchor('adminka/news/index/'.$new->id.'/', $new->name);?></h2>
<?=$new->text?>
</td>
<td width='100'>
</td>
<td>
<?=HTML::anchor('adminka/news/delete/'.$new->id.'/', 'удалить');?><br/>
<? if($new->showhide == 'show'):?>
<?=HTML::anchor('adminka/news/hide/'.$new->id.'/', 'скрыть');?>
<? elseif($new->showhide == 'hide'): ?>
<?=HTML::anchor('adminka/news/show/'.$new->id.'/', 'показать');?>
<? endif;?><br/>
<?=HTML::anchor('adminka/news/edit/'.$new->id.'/', 'редактировать');?><br/>
</td>
</tr>
<? endforeach;?>
</table>
<?=HTML::anchor('adminka/news/add/', 'добавить');?>
<?=$pagination?>