<h1>Добавить</h1>
<!-- form -->
<?=Form::open('adminka/news/add/', array('method' => 'post','enctype'=>'multipart/form-data'));?>

<p>
<?=Form::label('images','Загрузить изображение: ')?>
<?=Form::file('images[]', array('id'=>'multi'))?>
</p>

<p>
<?=Form::label('name','Название: *')?><br/>
<?=Form::input('name',$data['name'])?>
</p>

<p>
<?=Form::label('text','Текст: *')?><br/>
<?=Form::textarea('text',$data['text'],array('class'=>'ckeditor', 'id'=>'editor1'))?>
</p>

<p>
<?=Form::label('showhide','Показать/скрыть: *')?><br/>
<?=Form::select('showhide',array('show'=>'show', 'hide'=>'hide'), $data['showhide'])?>
</p>


<p><?=Form::submit('submit', 'OK');?></p>
<?=Form::close();?>