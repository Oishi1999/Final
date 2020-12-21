<?php
    require_once 'controllers/Book.php';
    $books=booksearch($_GET['name']);
    if(count($books)>0){
        foreach($books as $book){
			echo "<button onclick=location.href='BOOKDETAILS.php?id=".$book["id"]."'>".$book["name"]."</button><br>";
        }
    }
?>