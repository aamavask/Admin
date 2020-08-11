<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/add_data" method="POST">
    @csrf
      <input type="text" placeholder="prodid" name="prodid"><br>
      <input type="text" placeholder="prodname" name="prodname"><br>
      <input type="text" placeholder="stock" name="stock"><br>
      <input type="text" placeholder="shortdesc" name="shortdesc"><br>
      <input type="text" placeholder="longdesc" name="longdesc"><br>
      <input type="submit">
  </form>
</body>
</html>