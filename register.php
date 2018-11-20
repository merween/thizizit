    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBukmo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/half-slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Lakbay Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index1.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>
<?php
include("connections.php");


$fname = $emailad = $uname = $pnumber = $presentad = $password = $cpassword= "";
$fnameErr = $emailadErr = $unameErr = $pnumberErr = $presentadErr = $daysErr = $monthsErr = $yearErr = $passwordErr = $cpasswordErr = "";
$days = $months =  $year = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

If(empty($_POST["full-name"])){
$fnameErr = "Full name is required";
}
else{
$fname = $_POST["full-name"];

}

If(empty($_POST["email-address"])){
$emailadErr = "Full name is required";
}
else{
$emailad = $_POST["email-address"];
}

If(empty($_POST["username"])){
$unameErr = "Username is required";
}
else{
$uname = $_POST["username"];
}

If(empty($_POST["password"])){
$passwordErr = "password is required";
}
else{
$password = $_POST["password"];
}

If(empty($_POST["cpassword"])){
$cpasswordErr = "Confirmation password is required";
}
else{
$cpassword = $_POST["cpassword"];
}

If(empty($_POST["days"]) && empty($_POST["months"]) && empty($_POST["year"])){
$daysErr = "*";
$monthsErr = "*";
$yearErr = "*";
}
else{
$form_e_date= $_POST['year'] . "-" . $_POST['months'] . "-" . $_POST['days'];
}





 
        if($fname && $emailad && $uname && $password && $cpassword){


        	$check_email = mysqli_query($connections,"SELECT * FROM registration WHERE emailad='$emailad'");
        	$check_email_row = mysqli_num_rows($check_email);

        	if($check_email_row > 0){
        		$emailadErr ="Email is already registered!";

        	}else{
        		$query = mysqli_query($connections, "INSERT INTO registration(fullname, emailad, username, password, birthdate, account_type) Values('$fname','$emailad','$uname','$cpassword','$form_e_date','2')") or die (mysqli_error());

        	echo "<script language='javascript'>alert('Registration Successfully!')</script>";
        	echo "<script>window.location.href='register.php';</script>";
        }

        	

        	}
        }

?>
<br>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card"> 
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form name="my-form" action ="register.php"  method="POST">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" id="full_name" class="form-control" name="full-name" value ="<?php echo $fname; ?>">
                                        <span class ="error"><?php echo $fnameErr; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-8">
                                        <input type="text" id="email_address" class="form-control" name="email-address" value ="<?php echo $emailad; ?>">
                                        <span class ="error"><?php echo $emailadErr; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-8">
                                        <input type="text" id="user_name" class="form-control" name="username" value ="<?php echo $uname; ?>">
                                        <span class ="error"><?php echo $unameErr; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="passwordd" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" value ="<?php echo $password; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="c_password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name = "cpassword" class="form-control" value ="<?php echo $cpassword; ?>">
                                    </div>
                                </div>
                                    
                                <div class="form-group row">
                                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date of Birth</label>
                                    <div class="col-md-2">
                                        <select id="days" name="days" class="form-control" value ="<?php echo $days; ?>"><option  value ="">-</option><option value="1">1&nbsp;&nbsp;</option><option value="2">2&nbsp;&nbsp;</option><option value="3">3&nbsp;&nbsp;</option><option value="4">4&nbsp;&nbsp;</option><option value="5">5&nbsp;&nbsp;</option><option value="6">6&nbsp;&nbsp;</option><option value="7">7&nbsp;&nbsp;</option><option value="8">8&nbsp;&nbsp;</option><option value="9">9&nbsp;&nbsp;</option><option value="10">10&nbsp;&nbsp;</option><option value="11">11&nbsp;&nbsp;</option><option value="12">12&nbsp;&nbsp;</option><option value="13">13&nbsp;&nbsp;</option><option value="14">14&nbsp;&nbsp;</option><option value="15">15&nbsp;&nbsp;</option><option value="16">16&nbsp;&nbsp;</option><option value="17">17&nbsp;&nbsp;</option><option value="18">18&nbsp;&nbsp;</option><option value="19">19&nbsp;&nbsp;</option><option value="20">20&nbsp;&nbsp;</option><option value="21">21&nbsp;&nbsp;</option><option value="22">22&nbsp;&nbsp;</option><option value="23">23&nbsp;&nbsp;</option><option value="24">24&nbsp;&nbsp;</option><option value="25">25&nbsp;&nbsp;</option><option value="26">26&nbsp;&nbsp;</option><option value="27">27&nbsp;&nbsp;</option><option value="28">28&nbsp;&nbsp;</option><option value="29">29&nbsp;&nbsp;</option><option value="30">30&nbsp;&nbsp;</option><option value="31">31&nbsp;&nbsp;</option> </select>
                                        <span class ="error"><?php echo $daysErr; ?></span>
                                            
                                            
                                    </div>
                                        <div class="col-md-2">
                                        <select id="months" name="months" class="form-control" value ="<?php echo $months; ?>"><option value="">-</option><option value="1">January&nbsp;</option><option value="2">February&nbsp;</option><option value="3">March&nbsp;</option><option value="4">April&nbsp;</option><option value="5">May&nbsp;</option><option value="6">June&nbsp;</option><option value="7">July&nbsp;</option><option value="8">August&nbsp;</option><option value="9">September&nbsp;</option><option value="10">October&nbsp;</option><option value="11">November&nbsp;</option><option value="12">December&nbsp;</option> </select>
                                        <span class ="error"><?php echo $monthsErr; ?></span>

                                    </div><div class="col-md-4">
                                        
                                        <select id="year" name="year" class="form-control" value ="<?php echo $year; ?>"><option value="">-</option><option value="2018">2018&nbsp;&nbsp;</option><option value="2017">2017&nbsp;&nbsp;</option><option value="2016">2016&nbsp;&nbsp;</option><option value="2015">2015&nbsp;&nbsp;</option><option value="2014">2014&nbsp;&nbsp;</option><option value="2013">2013&nbsp;&nbsp;</option><option value="2012">2012&nbsp;&nbsp;</option><option value="2011">2011&nbsp;&nbsp;</option><option value="2010">2010&nbsp;&nbsp;</option><option value="2009">2009&nbsp;&nbsp;</option><option value="2008">2008&nbsp;&nbsp;</option><option value="2007">2007&nbsp;&nbsp;</option><option value="2006">2006&nbsp;&nbsp;</option><option value="2005">2005&nbsp;&nbsp;</option><option value="2004">2004&nbsp;&nbsp;</option><option value="2003">2003&nbsp;&nbsp;</option><option value="2002">2002&nbsp;&nbsp;</option><option value="2001">2001&nbsp;&nbsp;</option><option value="2000">2000&nbsp;&nbsp;</option><option value="1999">1999&nbsp;&nbsp;</option><option value="1998">1998&nbsp;&nbsp;</option><option value="1997">1997&nbsp;&nbsp;</option><option value="1996">1996&nbsp;&nbsp;</option><option value="1995">1995&nbsp;&nbsp;</option><option value="1994">1994&nbsp;&nbsp;</option><option value="1993">1993&nbsp;&nbsp;</option><option value="1992">1992&nbsp;&nbsp;</option><option value="1991">1991&nbsp;&nbsp;</option><option value="1990">1990&nbsp;&nbsp;</option><option value="1989">1989&nbsp;&nbsp;</option><option value="1988">1988&nbsp;&nbsp;</option><option value="1987">1987&nbsp;&nbsp;</option><option value="1986">1986&nbsp;&nbsp;</option><option value="1985">1985&nbsp;&nbsp;</option><option value="1984">1984&nbsp;&nbsp;</option><option value="1983">1983&nbsp;&nbsp;</option><option value="1982">1982&nbsp;&nbsp;</option><option value="1981">1981&nbsp;&nbsp;</option><option value="1980">1980&nbsp;&nbsp;</option><option value="1979">1979&nbsp;&nbsp;</option><option value="1978">1978&nbsp;&nbsp;</option><option value="1977">1977&nbsp;&nbsp;</option><option value="1976">1976&nbsp;&nbsp;</option><option value="1975">1975&nbsp;&nbsp;</option><option value="1974">1974&nbsp;&nbsp;</option><option value="1973">1973&nbsp;&nbsp;</option><option value="1972">1972&nbsp;&nbsp;</option><option value="1971">1971&nbsp;&nbsp;</option><option value="1970">1970&nbsp;&nbsp;</option><option value="1969">1969&nbsp;&nbsp;</option><option value="1968">1968&nbsp;&nbsp;</option><option value="1967">1967&nbsp;&nbsp;</option><option value="1966">1966&nbsp;&nbsp;</option><option value="1965">1965&nbsp;&nbsp;</option><option value="1964">1964&nbsp;&nbsp;</option><option value="1963">1963&nbsp;&nbsp;</option><option value="1962">1962&nbsp;&nbsp;</option><option value="1961">1961&nbsp;&nbsp;</option><option value="1960">1960&nbsp;&nbsp;</option><option value="1959">1959&nbsp;&nbsp;</option><option value="1958">1958&nbsp;&nbsp;</option><option value="1957">1957&nbsp;&nbsp;</option><option value="1956">1956&nbsp;&nbsp;</option><option value="1955">1955&nbsp;&nbsp;</option><option value="1954">1954&nbsp;&nbsp;</option><option value="1953">1953&nbsp;&nbsp;</option><option value="1952">1952&nbsp;&nbsp;</option><option value="1951">1951&nbsp;&nbsp;</option><option value="1950">1950&nbsp;&nbsp;</option><option value="1949">1949&nbsp;&nbsp;</option><option value="1948">1948&nbsp;&nbsp;</option><option value="1947">1947&nbsp;&nbsp;</option><option value="1946">1946&nbsp;&nbsp;</option><option value="1945">1945&nbsp;&nbsp;</option><option value="1944">1944&nbsp;&nbsp;</option><option value="1943">1943&nbsp;&nbsp;</option><option value="1942">1942&nbsp;&nbsp;</option><option value="1941">1941&nbsp;&nbsp;</option><option value="1940">1940&nbsp;&nbsp;</option><option value="1939">1939&nbsp;&nbsp;</option><option value="1938">1938&nbsp;&nbsp;</option><option value="1937">1937&nbsp;&nbsp;</option><option value="1936">1936&nbsp;&nbsp;</option><option value="1935">1935&nbsp;&nbsp;</option><option value="1934">1934&nbsp;&nbsp;</option><option value="1933">1933&nbsp;&nbsp;</option><option value="1932">1932&nbsp;&nbsp;</option><option value="1931">1931&nbsp;&nbsp;</option><option value="1930">1930&nbsp;&nbsp;</option><option value="1929">1929&nbsp;&nbsp;</option><option value="1928">1928&nbsp;&nbsp;</option><option value="1927">1927&nbsp;&nbsp;</option><option value="1926">1926&nbsp;&nbsp;</option><option value="1925">1925&nbsp;&nbsp;</option><option value="1924">1924&nbsp;&nbsp;</option><option value="1923">1923&nbsp;&nbsp;</option><option value="1922">1922&nbsp;&nbsp;</option><option value="1921">1921&nbsp;&nbsp;</option><option value="1920">1920&nbsp;&nbsp;</option><option value="1919">1919&nbsp;&nbsp;</option><option value="1918">1918&nbsp;&nbsp;</option><option value="1917">1917&nbsp;&nbsp;</option><option value="1916">1916&nbsp;&nbsp;</option><option value="1915">1915&nbsp;&nbsp;</option><option value="1914">1914&nbsp;&nbsp;</option><option value="1913">1913&nbsp;&nbsp;</option><option value="1912">1912&nbsp;&nbsp;</option><option value="1911">1911&nbsp;&nbsp;</option><option value="1910">1910&nbsp;&nbsp;</option><option value="1909">1909&nbsp;&nbsp;</option><option value="1908">1908&nbsp;&nbsp;</option><option value="1907">1907&nbsp;&nbsp;</option><option value="1906">1906&nbsp;&nbsp;</option><option value="1905">1905&nbsp;&nbsp;</option><option value="1904">1904&nbsp;&nbsp;</option><option value="1903">1903&nbsp;&nbsp;</option><option value="1902">1902&nbsp;&nbsp;</option><option value="1901">1901&nbsp;&nbsp;</option><option value="1900">1900&nbsp;&nbsp;</option> </select>
                                        <span class ="error"><?php echo $yearErr; ?></span>
                                    
                                </div></div>
                                    
                                    
                                    
                                

                                

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="reg_user">
                                        Register
                                        </button>
                                    </div>
                                </form></div>
                            
                        </div>
                    </div>
            </div>
        </div>

   
    

</main>
<br>
    <footer class="footer">

<div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i>Contact With Us</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><strong>Phone :</strong>+94 (65)222-44-55</li>
                            <li><strong>Email :</strong><a href=""> info@lakbayhub.com</a></li>
                            <li><strong>Address :</strong> Dasmariñas, Cavite</li>
                           
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="">Documentation</a></li>
                            <li><a href="">Support</a></li>
                            <li><a href="">Legal Terms</a></li>
                            <li><a href="">About</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form>
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-secondary-outline btn-lg">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>

	


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>