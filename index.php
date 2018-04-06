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

      <!--TABLE DISPLAY-->

       <div class = "row">
           <div class = "col-lg-12">
               <div class = "card">
                   <div class = "card-header">
                        <div class = "card-header card-header-title">
                           <h3>Used Car Roster</h3>
                           <p>
                           </p>
                        </div>
                   </div>
                   <div class = "card-body">
                        <table class = "table table-striped" id = "train-table">
                            <thead>
                                <tr>
                                    <th>Car Make</th>
                                    <th>Car Model</th>
                                    <th>Year</th>
                                    <th>Miles</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include "displaydata.php";
                                ?>
                            </tbody>
                        </table>
                   </div>
               </div>
           </div>
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
                    <form action = "php/submit.php">

                    <div class = "form-group">
                        <label-for = "train-name">Car Make:</label-for>
                        <input class = "form-control" id = "train-name" type = "text">
                    </div>
                    <div class = "form-group">
                        <label-for = "destination">Car Model:</label-for>
                        <input class = "form-control" id = "destination" type = "text">
                    </div>                    
                    <div class = "form-group">
                        <label-for = "first-train-time">Year Manufactured:</label-for>
                        <input class = "form-control" id = "first-train-time" type = "text">
                    </div>
                    <div class = "form-group">
                        <label-for = "frequency">Miles:</label-for>
                        <input class = "form-control" id = "frequency" type = "text">
                    </div>
                    <div class = "form-group">
                        <label-for = "frequency">Your asking price:</label-for>
                        <input class = "form-control" id = "frequency" type = "text">
                    </div>  
                   
                    <input id="submit-data" class="btn btn-primary" type="submit" value="Submit">
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