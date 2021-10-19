<!DOCTYPE html>
<html>
<head>
          <!-- Bootstrap core CSS -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
     * {

      font-family: arial;

     }

     body {

        margin-left: 10%;
        margin-right: 10%;
         margin-top: 5%;

     }


</style>
    <title>BML130 URLs</title>

    </head>


<body>

<?php

define("URL", 'http://bsch-dev.chi.ac.uk/~');


$users = array(
'Nathan'=>'NABBOTT1',
    'Kit'=>'KARTHUR2',
    'Harvey'=>'HBARLOW1',
    'Victoria'=>'VCOLE3',
    'Alex'=>'ADABY1',
    'Gary'=>'GFISHLO1',
    'Jason'=>'JFRANKL2',
    'KyranM'=>'KHARDIN4',
    'Ben'=>'BHARTLE1',
    'Nick'=>'NHOLLAN1',
    'Tom'=>'TLIGHT1',
    'Adele'=>'AMASON3',
    'Mai'=>'MMATHES1',
    'Lauren'=>'LMILLS5',
    'Will'=>'WMOORE1',
    'Ryan'=>'ROSULLI1',
    'Joe'=>'JRADFOR2',
    'Freya'=>'FTHOMAS3',
    'Kealan'=>'KVAHEY1',
    'Josh'=>'JWEBB7',
    'Carmen'=>'CWONG3'   
);?>

 

    
    <div class="container">

    <h1>BML130 - Fundamentals of Website Development</h1>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>URL</th>

      </tr>
    </thead>
    <tbody>
<?php


foreach ($users as $name=>$username) {

    $username = strtoupper($username);
    echo '<tr><td>';

    echo $name;

    echo '</td><td> <a href="';

    echo URL .  $username.'/dap405/assignment/';

    echo '" target="_blank">'.URL. $username.'/bml130/assignment/</a>';
     echo '</td>';
     echo '</tr>'; // row

}



?> <tbody>
        </table>
    </div><!--    container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

</html>

