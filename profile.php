<?php require_once('ums/inc/connection.php') ?>
<?php
session_start();
$user = $_SESSION['susername'];
$id = $_SESSION['sid'];

//
$querys = "SELECT * FROM signup WHERE id='$id'";
$result_set = mysqli_query($connction,$querys);
$record = mysqli_fetch_assoc($result_set);
$id = $record['id'];
// echo $id;
  // $row=$result_set->fetch_array(MYSQLI_ASSOC);
  if (isset($_POST['sub'])) {
    $namen = $_POST['namenew'];
    $emailn = $_POST['emailnew'];
    $telephonen = $_POST['telephonenew'];
    $districtn = $_POST['districtnew'];
    $cityn = $_POST['citynew'];
  $queryu = "UPDATE signup SET name='$namen',email='$emailn',telephone='$telephonen',district='$districtn',city='$cityn' WHERE id=$id";
  $resultu = mysqli_query($connction,$queryu);
header("Refresh:0");

  if ($resultu) {
    // echo "updated";

  }else {
    // echo "not updated";
  }
$connction->close();
}

  $name = $record['name'];
  $email = $record['email'];
  $telephone = $record['telephone'];
  $district = $record['district'];
  $city = $record['city'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your Profile</title>
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="profstyle.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<script src="js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="logo">
            <img src="images/logo3.png" alt="logo">
          </div>
        </div>
        <div class="col-md-4">
          <header>
            <h2>Hi <?php echo $name; ?>, Welcome to your profile..!</h2>
          </header>
        </div>
        <div class="col-md-4">
          <div class="right-corner">
            <h5><a href="index.php">Back to << Home Page</a>
            </h5>
          </div>

        </div>
      </div>
    </div>
    <div class="container first">
      <div class="row">
        <div class="col-md-4 bio">
          <h4>Bio of yourself</h4>
        </div>
        <div class="col-md-8">
            <h5>Your posts</h5>
        </div>
      </div>
    </div>
    <div class="container mid">
      <div class="row">
        <div class="col-md-1.7 left">

          <p>Name </p><br>
          <p>Email </p><br>
          <p>Telephone(+94) </p><br>
          <p>District </p><br>
          <p>City </p>
        </div>
        <div class="col-md-2.3 about">
          <form  action="profile.php" method="post">
            <input type="text" class="form-control" name="namenew" value="<?php echo $name; ?>" disabled><br>
            <input type="text" class="form-control" name="emailnew" value="<?php echo $email; ?>" disabled><br>
            <input type="text" class="form-control" name="telephonenew" value="<?php echo $telephone; ?>" disabled><br>
            <!-- <input type="text" class="form-control" name="districtnew" value="<?php echo $district; ?>" disabled><br> -->
            <select class="form-control" name="districtnew" id="sel1" disabled>
              <option <?php if($district == 'Colombo') echo"selected"; ?>>Colombo</option>
              <option <?php if($district == 'Gampaha') echo"selected"; ?>>Gampaha</option>
              <option <?php if($district == 'Kaluthara') echo"selected"; ?>>Kaluthara</option>
              <option <?php if($district == 'Kaluthara') echo"selected"; ?>>Galle</option>
              <option <?php if($district == 'Galle') echo"selected"; ?>>Matara</option>
              <option <?php if($district == 'Hambanthota') echo"selected"; ?>>Hambanthota</option>
              <option <?php if($district == 'Kegalle') echo"selected"; ?>>Kegalle</option>
              <option <?php if($district == 'Rathnapura') echo"selected"; ?>>Rathnapura</option>
              <option <?php if($district == 'Badulla') echo"selected"; ?>>Badulla</option>
              <option <?php if($district == 'Bandarawela') echo"selected"; ?>>Bandarawela</option>
              <option <?php if($district == 'Trinkomalee') echo"selected"; ?>>Trinkomalee</option>
              <option <?php if($district == 'Batticaloa') echo"selected"; ?>>Batticaloa</option>
              <option <?php if($district == 'Ampara') echo"selected"; ?>>Ampara</option>
              <option <?php if($district == 'Kandy') echo"selected"; ?>>Kandy</option>
              <option <?php if($district == 'Nuwara Eliya') echo"selected"; ?>>Nuwara Eliya</option>
              <option <?php if($district == 'Matale') echo"selected"; ?>>Matale</option>
              <option <?php if($district == 'Puththalama') echo"selected"; ?>>Puththalama</option>
              <option <?php if($district == 'Kurunegala') echo"selected"; ?>>Kurunegala</option>
              <option <?php if($district == 'Anuradhapura') echo"selected"; ?>>Anuradhapura</option>
              <option <?php if($district == 'Polonnaruwa') echo"selected"; ?>>Polonnaruwa</option>
              <option <?php if($district == 'Mannar') echo"selected"; ?>>Mannar</option>
              <option <?php if($district == 'Vavniya') echo"selected"; ?>>Vavniya</option>
              <option <?php if($district == 'Mullative') echo"selected"; ?>>Mullative</option>
              <option <?php if($district == 'Kilinochchi') echo"selected"; ?>>Kilinochchi</option>
              <option <?php if($district == 'Jaffna') echo"selected"; ?>>Jaffna</option>
            </select><br>
            <input type="text" class="form-control" name="citynew" value="<?php echo $city; ?>" disabled><br>
            <input id="hide" type="button" onclick="myFunction()" class="form-control" value="Edit info" name="button">
            <input id="show" type="submit" class="form-control" name="sub" value="Update Info">
          </form>

          <!-- <p id="editor"></p> -->
        </div>
        <div class="col-md-8 right">

        </div>

      </div>

    </div>
    <script type="text/javascript">
    function myFunction() {
  // document.getElementById("editor").innerHTML = "Hello World";
// document.getElementsByTagName("INPUT")[0].setAttribute("disabled", false);
document.getElementsByTagName("INPUT")[0].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[1].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[2].removeAttribute("disabled");
document.getElementsByTagName("SELECT")[0].removeAttribute("disabled");
document.getElementsByTagName("INPUT")[3].removeAttribute("disabled");

  // document.getElementsByTagName("INPUT")[4].setAttribute("onclick", "none");
  //   // document.getElementsByTagName("INPUT")[4].setAttribute("value", "update info");
  //   document.getElementsByTagName("INPUT")[4].setAttribute("name", "sub");

  $(document).ready(function(){
          $("#show").show();
            $("#hide").hide();
  });

  }

  $(document).ready(function(){
          $("#hide").show();
          $("#show").hide();
  });
  function changer(){
    document.getElementsByTagName("INPUT")[4].setAttribute("type", "submit");
    document.getElementsByTagName("INPUT")[4].setAttribute("name", "sub");
    document.getElementsByTagName("INPUT")[4].setAttribute("value", "update info");
    document.getElementsByTagName("INPUT")[4].setAttribute("onclick", "none");
  }
    // $(document).ready(function (){
    //          });
    </script>
  </body>
</html>
