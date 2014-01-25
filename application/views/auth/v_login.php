<? if(Auth::instance()->logged_in()): ?>
<?=HTML::anchor('','Кабинет пользователя');?><br>
<?=HTML::anchor('auth/auth/logout','Выход');?>
<? else:?>
<h2>Вход</h2>
<?=Debug::vars($errors);?>
<?=Form::open('auth/auth/login', array('method' => 'post'));?>
<table width='100%'>



<tr>
<td>
<?=Form::label('username','Login')?>
</td>
<td>
<?=Form::input('username',$data['username'])?>
</td>
</tr>

<tr>
<td>
<?=Form::label('password','Password')?>
</td>
<td>
<?=Form::password('password',$data['password'])?>
</td>
</tr>


<tr>
<td>
<?=Form::submit('submit', 'OK');?>
</td>
</tr>

</table>
<?=Form::close();?>
<?=HTML::anchor('auth/auth/login','Вход');?><br>
<?=HTML::anchor('auth/auth','Регистрация');?>
<? endif;?>