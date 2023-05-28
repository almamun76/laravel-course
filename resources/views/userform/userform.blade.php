<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>create</title>
</head>
<body>
	<form method="post" action="/add-user">
       @csrf
        <input type="text" name="userName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
