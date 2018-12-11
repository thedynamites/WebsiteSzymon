<?php

  // Function to add the post info to the csv --> alternate option: fputcsv() function
  function export(array $csv_array, $fileName) {

    // Get the data of the CSV
    $data = file_get_contents($fileName);

    // Set a counter to 0
    $counter = 0;
    
    foreach($csv_array as $fields) {
        // Add each field to the data separated by a comma
        $data .= $fields;
        // After each handled field the counter will be increased by one
        $counter++;
        // Post data contains 4 fields. If the counter equals 3 then a new line in the CSV will be added
        // else a comma will be placed as delimiter
        if($counter == 4) {
          $data .= PHP_EOL;
        } else {
          $data .= ',';
        }
    }

    // Complete the CSV
    file_put_contents($fileName, $data);

  }

  // Create an array
  $post_array = array();

  // Check the submitted info and call the export function to add the info to the CSV
  if(isset($_POST['date'])) {

    $date = strip_tags(htmlspecialchars($_POST['date']));
	  $time = strip_tags(htmlspecialchars($_POST['time']));
    $app = strip_tags(htmlspecialchars($_POST['appointment']));
    $loc = strip_tags(htmlspecialchars($_POST['location']));
  
    array_push($post_array,$date,$time,$app,$loc);

    export($post_array,'appointments.csv');
    
  }

?>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Afspraken
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Afspraken</li>
      </ol>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card h-100">
            
<?php
    include_once 'includes/dbh.inc.php';  
?>
              <h4>Nieuwe afspraak inplannen</h4>
              <!-- <form action="index.php?choice=app" method="post">
                <div class="form-group">
                  <label for="date">Datum*:</label>
                  <input type="date" class="form-control" name="date" id="date" required>
                </div>
				<div class="form-group">
                  <label for="time">Tijd*:</label>
                  <input type="time" class="form-control" name="time" id="time" required>
                </div>
                <div class="form-group">
                  <label for="appointment">Afspraak*:</label>
                  <input type="text" class="form-control" name="appointment" id="appointment" required>
                </div>
                <div class="form-group">
                  <label for="location">Locatie*:</label>
                  <input type="text" class="form-control" name="location" id="location" required>
                </div>
                <button type="submit" class="btn btn-primary">Afspraak toevoegen</button>
                <hr>
                <em>*) Verplichte velden</em>
              </form>-->
                                
    <form action="includes/signup.inc.php" method="post">
        <input type="date" name="datum" placeholder="datum">
        <br>
        <input type="time" name="tijd" placeholder="tijd">
        <br>
        <input type="text" name="afspraak" placeholder="afspraak">
        <br>
        <input type="text" name="adres" placeholder="adres">
        <br>
        <button type="submit" name="submit">maak een afspraak</button>
    </form>


<?php
    $sql = "SELECT * FROM afspraak;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    
    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['id'] . "<br>";
            echo $row['datum'] . "<br>";
            echo $row['tijd'] . "<br>";
            echo $row['afspraak'] . "<br>";
            echo $row['adres'] . "<br>" . "<br>";
        }
    }
?>
    
                
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

 
    </div>
    <!-- /.container -->
