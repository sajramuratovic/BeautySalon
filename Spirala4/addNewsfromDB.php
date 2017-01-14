<?php
$conn = mysqli_connect('localhost', 'root', '', 'sajrinabaza');
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}


function getArticles($conn)
{
	$sql = "SELECT * FROM articles";
	 $result = mysqli_query($conn, $sql);
	 while ($row = $result->fetch_assoc())
	 {
		 echo "<div class= 'articles-box'>";
		 echo "<br>";
		 echo "<h2>";echo $row['title']."<br>";echo"</h2>";
		 echo "<p>"; echo $row['description']."<br>";echo "</p>";
		 echo "<h3>";echo $row['author']."<br>";echo "</h3>";
		 echo "</div>";
		 
		 echo "<form>
		 <input type='hidden' name='user_id' value='Anonymous'>
		 <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		 <textarea name='message'></textarea><br>
		 <button type='submit' name='submit'>Comment</button><br>
		 </form>";
	 }
}


?>