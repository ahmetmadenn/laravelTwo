<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İletisim formu</title>
</head>
<body>
<form action="{{ route('iletisim-sonuc') }}" method="post">
    @csrf
   <label>Ad Soyad</label><br>
    <input type="text" name="adsoyad"><br>
    <label>Telefon</label><br>
    <input type="text" name="telefon"><br>
    <label>E-Mail</label><br>
    <input type="text" name="maik"><br>
    <label>Mesaj</label><br>
    <textarea name="metin"  style="width:300px; height:200px;"></textarea><br>
     <input type="submit" name= "ilet" value="Gönder">


</body>
</html>
