<?
if((isset($_POST['name'])&&$_POST['name']!="")
	&&(isset($_POST['website'])&&$_POST['website']!="")
	&&(isset($_POST['email'])&&$_POST['email']!="")
	&&(isset($_POST['address'])&&$_POST['address']!="")
	&&(isset($_POST['subject'])&&$_POST['subject']!="")
	&&(isset($_POST['message'])&&$_POST['message']!="")
	){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'yevgeniybabanin@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заявка с сайта'; //Заголовок сообщения
        $backurl = '/thnx/index.html';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>E-mail адрес: '.$_POST['email'].'</p>
                        <p>Ваш сайт: '.$_POST['website'].'</p>
                        <p>Откуда Вы: '.$_POST['address'].'</p>
                        <p>Тема обращения: '.$_POST['subject'].'</p>
                        <p>Ваше сообщение: '.$_POST['message'].'</p>

                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <info@creatiweb.zzz.com.ua>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
        print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 1000); 
//--></script> 
 
<!--$msg 
 
<p>Успешно отправлено!</p>-->";  
exit; 
	}
?>