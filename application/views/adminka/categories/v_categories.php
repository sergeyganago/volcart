<? if($errors): ?>
 <? foreach($errors as $err): ?>
 <p style='color:red'?>
 <?=$err ?>
 </p>
 <? endforeach; ?>

<? endif;?>

<?=Form::open('adminka/categories', array('method' => 'post'));?>

<p>
<?=Form::input('name', null)?>
</p>
<br/>
<p>
<select name='cat_num'>
	<option value='0'>Выберите из списка</option>
	<? foreach($cat as $cat_one): ?>
	<option value='<?=$cat_one->id; ?>'><?=str_repeat('&#10042;', 1*$cat_one->lvl).$cat_one->name; ?></option>
	<? endforeach; ?>
</select>
</p>
<br/>
<p><?=Form::submit('add', 'добавить');?> <?=Form::submit('delete', 'удалить');?></p>
<?=Form::close();?>