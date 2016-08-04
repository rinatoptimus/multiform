<?
if((isset($_POST['company'])&&$_POST['company']!="")&&(isset($_POST['country'])&&$_POST['country']!="")&&(isset($_POST['material'])&&$_POST['material']!="")&&(isset($_POST['keyboard'])&&$_POST['keyboard']!="")&&(isset($_POST['mouse'])&&$_POST['mouse']!="")&&(isset($_POST['carpet'])&&$_POST['carpet']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'test@dobraya.hol.es'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заголовок сообщения'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Компания: '.$_POST['company'].'</p>
                        <p>Страна: '.$_POST['country'].'</p> 
                        <p>Материал: '.$_POST['material'].'</p>
                        <p>Клавиатура: '.$_POST['keyboard'].'</p>
                        <p>Мышь: '.$_POST['mouse'].'</p>
                        <p>Коврик: '.$_POST['carpet'].'</p>                       
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
