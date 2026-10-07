<?php
include 'layouts/guest/header.php';
include 'db.php';
?>


hello

<?php
$sql = "SELECT id, name, year FROM cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["year"] . "<br>";
  }
} else {
  echo "0 results";
} ?>

<?php
include 'layouts/guest/footer.php';
?>