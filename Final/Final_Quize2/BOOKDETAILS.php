<?php
    require_once 'controllers/Book.php';
    $book=getBookInfo($_GET["id"]);
?>
<html>
	<head><title>Book Details</title></head>
              <center>
			  <h1>Book Information</h1>
				<table border="1">
					<tr>
						<td>Name:</td>
						<td><?php echo $book[0]["name"]; ?></td>
					</tr>
					<tr>
						<td>Author:</td>
						<td><?php echo $book[0]["author"]; ?></td>
					</tr>
					<tr>
						<td>Edition:</td>
						<td><?php echo $book[0]["edition"]; ?></td>
					</tr>
					<tr>
						<td>Image:</td>
						<td><img src="<?php echo $book[0]["image"];?>" width="60" height="60"></td>
					</tr>
				</table>
	      </center>
	</body>
</html>