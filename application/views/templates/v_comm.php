<h2><?=$comm->text?></h2>
(<?=$comm->news->name?>)
<hr/>
<?=Form::open('answer/index/'.$comm->id.'/', array('method' => 'post'));?>
<?=Form::input('name', 'Введите имя', array('class' => 'name'));?><br/>
<?=Form::textarea('message', 'Введите текст сообщения', array('class' => 'message'));?><br/>
<?=Form::submit('send', 'Ответить');?>
<?=Form::close();?>