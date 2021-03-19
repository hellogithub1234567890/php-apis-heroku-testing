<?php
$servername = "localhost";
$username = "u9rae5khdldm5mi";
$password = "O%EVD2h0Bn@dPSrb7IrM%Df3Q";

try {
  $conn = new PDO("Server=tcp:eu-az-sql-servca0b8bea36444442ae8d0b9d8df984c5.database.windows.net,1433;Initial Catalog=dx1tqvr61l3y3ym;Persist Security Info=False;User ID=u9rae5khdldm5mi;Password=O%EVD2h0Bn@dPSrb7IrM%Df3Q;MultipleActiveResultSets=False;Encrypt=True;TrustServerCertificate=False;Connection Timeout=30;
", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
