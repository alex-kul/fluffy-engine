<html>
  
<head>
<title>Администрирование галереи</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
  
<body>
  <h3>Администрирование галереи</h3>
  <p><a href="index.html">Главная страница</a></p>
    <form method='POST' enctype="multipart/form-data" action=''>
      <input type="hidden" name="MAX_FILE_SIZE" value="1024 * 1024 * 2" />
      <input name="imgfile" type="file" /><br />
      <textarea maxlength="128" rows="1" cols="60" name="for_i_title" placeholder="Название изображения"></textarea><br />
      <textarea maxlength="1024" rows="3" cols="60" name="for_i_desc" placeholder="Краткое описание изображения"></textarea>
     <br /><input type="submit" value="Загрузить" /><br /><br />
    </form>
</body>
  
</html>
