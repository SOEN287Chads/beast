<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // Test database conection
        $dbhost="localhost";
        $dbName="products";
        $user="root";
        $pass="synystergates123";
        $conn = new mysqli($dbhost,$user,$pass,$dbName);
        try{
            echo "Connected with products database" . "<br>";
        }
        catch(Exception $e){
                die("Connection failed".$e->getMessage());
        }

        // At this point connection to database is Successful

        // Inserting values into table

        /*

        $sql = "INSERT INTO products (name, price, code, image)
        VALUES ('NikeHeadband', 10, '0001', '../img/Products/NikeHeadband/img-1.jpg')";

        $sql .= "INSERT INTO products (name, price, code, image)
        VALUES ('SkippingRope', '25', '0002', '../img/Products/SkippingRope/img-1.jpg')";

        $sql .= "INSERT INTO products (name, price, code, image)
        VALUES ('LiftingGloves', '25', '0003', '../img/Products/LiftingGloves/img-1.jpg')";


        $sql .= "INSERT INTO products (name, price, code, image)
        VALUES ('ResistantTube', '20', '0004', '../img/Products/ResistantTube/img-1.jpg')";

        if ($conn->query($sql) === TRUE) {
        echo "New records created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        */

        // Test if there is database connection

        $test_query = "SHOW TABLES FROM $dbName";
        $result1 = mysql_query($test_query);

        $tblCnt = 0;
        while($tbl = mysql_fetch_array($result1)) {
          $tblCnt++;
          #echo $tbl[0]."<br />\n";
        }

        if (!$tblCnt) {
          echo "There are no tables<br />\n";
        } else {
          echo "There are $tblCnt tables<br />\n";
        }

        // Get all products from the table and print the values to test

        $sql = "SELECT name, price, code, image FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - Price: " . $row["price"]. " " . $row["code"]. " " . $row["image"]."<br>";
        }
        } else {
        echo "0 results";
      }
        $conn->close();

    ?>

  </body>
</html>
