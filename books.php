<?php
header("Content-type: text/html; charset=UTF-8");
$sxml = simplexml_load_file("books.xml");
?>
<html>
<head>
<title>Каталог</title>

<style>
table {
    width: 100%;
    border-collapse: collapse; /* убирает двойные рамки */
    font-family: sans-serif;
    font-size: 16px;
}

th, td {
    border: 1px solid #000; /* рамка таблицы */
    padding: 8px;
    text-align: left;
}

th {
    background: #f2f2f2; /* легкая заливка заголовков */
}
</style>

</head>
<body>
<h1>Каталог книг</h1>

<table>
<tr>
    <th>Автор</th>
    <th>Название</th>
    <th>Год издания</th>
    <th>Цена, руб</th>
</tr>

<?php
foreach ($sxml->book as $book) {
    echo "<tr>";
    echo "<td>" . $book->author . "</td>";
    echo "<td>" . $book->title . "</td>";
    echo "<td>" . $book->pubyear . "</td>";
    echo "<td>" . $book->price . "</td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>