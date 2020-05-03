<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>View</h1>

<form action="{{route('calc')}}" method="post">

    <input type="text" name="v1">
    <select name="op" id="">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
    </select>
    <input type="text" name="v2">
    <button type="submit">Calc</button>
</form>

</body>
</html>