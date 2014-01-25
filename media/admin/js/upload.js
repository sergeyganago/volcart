$(function(){

$("#multi").MultiFile({
accept: 'jpg|gif|png',
max: 15,
STRING:{
					remove:'удалить',
					selected:'Выбраны файлы:$file',
					denied:'Неверный тип файла: $ext',
					dublicate:'Этот файл уже выбран $file'
					}

});

});