<?php
   $email = $_POST['email'];
   $password = $_POST['password'];
   // Database connection
   $con = new mysqli("localhost:3307", "root", "", "disqus");
   if($con->connect_error) {
   	die("Failed to connect :".$con->connect_error);
   } else {
     	$stmt = $con->prepare("select * from users where email = ?");
     	$stmt->bind_param("s", $email);
     	$stmt->execute();
     	$stmt_result = $stmt->get_result();
     	if($stmt_result->num_rows > 0) {
     		$data = $stmt_result->fetch_assoc();
     		if($data['password'] === $password)
     		{
     			echo "<h2><font color=green>Login Successfully!</font></h2>";
            
     		} else {
     			echo "<h2><font color=red>Invalid Email or password!</font></h2>";
            die();
     		}
     	} else {
     		echo "<h2> <font color=red>Invalid Email or password!</font></h2>";
         die();
     	}
   }
?>


<!DOCTYPE html>
<html>
<head>
<title>DISQUS</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #black;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body >
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Users</p>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["email"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body style="background-color: white ;">
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Tags</p>
<table>
<tr>
<th>Id</th>
<th>Tag name</th>
<th>Created at</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, tag_name, created_at FROM tags";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["tag_name"] . "</td><td>"
. $row["created_at"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Threads</p>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title, description FROM threads";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>"
. $row["description"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Thread Comments</p>
<table>
<tr>
<th>Id</th>
<th>Context</th>
<th>Created_at</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, Context, created_at FROM thread_comments";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Context"] . "</td><td>"
. $row["created_at"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">User Thread Tag</p>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Created_at</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, type, created_at FROM user_thread_tag";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["type"] . "</td><td>"
. $row["created_at"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Edit Suggestion</p>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title, description FROM edit_suggestion";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" .  $row["title"] . "</td><td>" . $row["description"] . "</td><td>" ;}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Notifications</p>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, title, description FROM notifications";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"] . "</td><td>"
. $row["description"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Votes</p>
<table>
<tr>
<th>Id</th>
<th>Upvote</th>
<th>Downvote</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, upvote, downvote FROM votes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["upvote"] . "</td><td>"
. $row["downvote"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


<html>
<head>
<title>PROJECT</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
   <p style="margin: auto; text-align: center; width: 100%; font-size: 2em; font-family: cursive; font-weight: 900;">Reputations</p>
<table>
<tr>
<th>Id</th>
<th>Description</th>
<th>Created_at</th>
</tr>
<?php
$conn = mysqli_connect("localhost:3307", "root", "", "disqus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, description, created_at FROM reputation";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["description"] . "</td><td>"
. $row["created_at"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>