<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update</title>
</head>
<body>
	<!-- <form method="post" action="/update-user"> -->
	<!-- <form method="post" action="/update-user-name"> -->
	<form method="post" action="/delete-user">
       @csrf
       <!-- @method('PUT') -->
       <!-- @method('PATCH') -->
       @method('DELETE')
        <input type="text" name="userName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
