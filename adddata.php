
<!DOCTYPE html>
<html>
    <html lang="en-us">

        <head>
      
          <meta charset="UTF-8">
          <title>Used Car Salesman</title>
      
          <!-- Bootstrap -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
          <!-- Firebase Reference -->
          <script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
          <!--ALERTIFY.JS-->
          <!-- JavaScript -->
            <script src="http://cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/alertify.min.js"></script>

            <!-- CSS -->
            <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
            <!-- Default theme -->
            <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/default.min.css"/>
            <!-- Semantic UI theme -->
            <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/semantic.min.css"/>
            <!-- Bootstrap theme -->
            <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>
                
          <!-- Moment.js Reference -->
          <script src="https://momentjs.com/downloads/moment.js"></script>   
          <script src="https://cdn.jsdelivr.net/momentjs/2.12.0/moment.min.js"></script>
          <script src="assets/javascript/app.js"></script>

          <link rel="stylesheet" href="assets/css/style.css">
      
        </head>
      
<body>
    <div class = "container">
       <div class = "jumbotron">
           <h1 class = "text-center">Used Car Sales App</h1>
       </div>

     
       <!--TRAIN FORM-->
       <div class = "row">
        <div class = "col-lg-12">
            <div class = "card">
                <div class = "card-header">
                     <div class = "card-header card-header-title">
                         <h3>Sell Your Car!</h3>
                         <!--
                             train name
                             destination
                             first train time
                             frequency 
                                            -->
                     </div>
                </div>
                
                <div class = "card-body">
                    <!-- SCRIPT START-->
                    <?php

                    include 'db.php';

                    $make = test_input($_POST['make']);
                    $model = test_input($_POST['model']);
                    $dateman = test_input($_POST['dateman']);
                    $miles = test_input($_POST['miles']);
                    $price = test_input($_POST['price']);

                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }



                    if(gettype($dateman) === 'integer' )

                    $query = "INSERT INTO car_roster
                    (`make`, 
                    `model`, 
                    `dateman`, 
                    `miles`, 
                    `price`)
                    VALUES (
                    '$make',
                    '$model',
                    '$dateman',
                    '$miles',
                    '$price'
                    )";


                    echo($query."<br>");

                    if(mysqli_connect_errno()) {
                    printf("connect failed:". mysqli_connect_error());
                    exit();
                    }

                    echo 'Connected successfuly to mySQL <br>';

                    $conn->select_db("used_cars");
                    echo("selected used cars database"."<br>");

                    //insert new car into database
                    if($conn->query($query) === TRUE){
                    echo "<p>you've succesfully entered a $make" . " $model into the database</p>";
                    echo "<a href = 'index.php'><button class = 'btn btn-priumary'>Return</button></a>";
                    } else {
                    echo "Error entering $make into database:".
                            mysqli_error($sql)."<br>";
                    }
                    $conn->close();

                    ?>

                    <!--SCRIPT END-->


                </div>

                

            </div>


                <div class = "card">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Instructions
                        </button>
                    </div>
                    <div class = "card-body">
                        <div class="collapse" id="collapseExample">

                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>
                </div>

                
            </div>
    </div>
</div>
</body>
</html>
