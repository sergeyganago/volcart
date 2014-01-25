<h2>Регистрация</h2>
<?=Debug::vars($errors);?>
<?=Form::open('auth/auth', array('method' => 'post'));?>
<table width='100%'>

<tr>
<td>
<?=Form::label('email','E-mail')?>
</td>
<td>
<?=Form::input('email',$data['email'])?>
</td>
</tr>

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
<?=Form::label('password_confirm','Password repeat')?>
</td>
<td>
<?=Form::password('password_confirm',$data['password_confirm'])?>
</td>
</tr>

<tr>
<td>
<?=Form::submit('submit', 'OK');?>
</td>
</tr>

</table>
<?=Form::close();?>