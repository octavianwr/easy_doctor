<?php
  include '../../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Easy Doctor</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/cardiogram.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Easy Doctor</h1>
                            <div class="description">
                            	<p>
	                            	Sudah punya akun Easy Doctor? Masuk di <a href="#">sini</a>
                            	</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">



		                	<div class="social-login">
							<br>
							<br>
							<br><br><br><br><br><br><br><br><br><br><br><br>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i>&nbsp;&nbsp; Facebook
		                        	</a>
									<br>
									<br>

		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i>&nbsp;&nbsp; Twitter
		                        	</a>

									<br>
									<br>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>

                        </div>
                        <br>

						 <div class="span2">
						 <br>
						 <br><br><br><br><br><br><br><br><br><br><br><br>
                        <div class="line1">
                        </div>
                        <p class="text-center mt-20 mb-20 small-gray">
                            atau
                        </p>
                        <div class="line2">
                        </div>
                    </div>


                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Daftar Sekarang</h3>
	                            		<p>Dengan mengisi form dibawah ini untuk masuk</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="signup_process.php" method="post" class="registration-form">
				                    	  <ul>
                                    <li>
									<div class="form-group">
				                    		<label class="sr-only" for="form-first-name"></label>
				                        	<input type="text" id="full-name" name="name" placeholder="Nama Lengkap" class="form-first-name form-control" id="form-first-name" required>
				                    </div>


                                    </li>
                                    <li>
									<div class="form-group">
				                    		<label class="sr-only" for="form-first-name"></label>
				                        	<input type="text" id="full-name" name="username" placeholder="Username" class="form-first-name form-control" id="form-first-name" required="required">
				                    </div>


                                    </li>
                                     <li>
										<label class="sr-only" for="form-first-name"></label>
                                        <input type="text" id="quantity" name="phonenumber" required placeholder='Nomor Handphone' value="" class="form-first-name form-control" id="form-first-name">&nbsp;
                                        <br><span id="errmsg" class="xsmall-red">
                                        </span>

                                    </li>
                                    <li>
                                           <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" required name="email" placeholder="Email" class="form-email form-control" id="form-email" required>
				                        </div>
                                    </li>
                                    <li>

                                       <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="pass" required placeholder="Password" class="form-password form-control" id="form-password">
				                        </div>
                                        </span>
                                    </li>

                                    <li>
                                        <label class="radio mr-20 ">
                                            <input type="radio" name="gender" id="gender-male" value="Pria" >
                                            <span class="genderRegister">
											Pria
                                            </span>
                                        </label>
                                        <label class="radio ">
                                            <input type="radio" name="gender" id="gender-female" value="Wanita" >
                                            <span class="genderRegister">
											Wanita
                                            </span>
                                        </label>&nbsp;
                                        <br><span id="error-gender" class="xsmall-red">

                                        </span>
                                    </li>
                                    <li id="bday-date">
                                        <label class="small-gray">Tanggal Lahir</label>&nbsp;
                                        <br><span id="error-bday" class="xsmall-red">

                                        </span>
                                        <div>

                                            <select name="bday_dd" id="sel-date" class="">
                                                <option value="">Tanggal</option>

                                                    <option value="1" >1</option>

                                                    <option value="2" >2</option>

                                                    <option value="3" >3</option>

                                                    <option value="4" >4</option>

                                                    <option value="5" >5</option>

                                                    <option value="6" >6</option>

                                                    <option value="7" >7</option>

                                                    <option value="8" >8</option>

                                                    <option value="9" >9</option>

                                                    <option value="10" >10</option>

                                                    <option value="11" >11</option>

                                                    <option value="12" >12</option>

                                                    <option value="13" >13</option>

                                                    <option value="14" >14</option>

                                                    <option value="15" >15</option>

                                                    <option value="16" >16</option>

                                                    <option value="17" >17</option>

                                                    <option value="18" >18</option>

                                                    <option value="19" >19</option>

                                                    <option value="20" >20</option>

                                                    <option value="21" >21</option>

                                                    <option value="22" >22</option>

                                                    <option value="23" >23</option>

                                                    <option value="24" >24</option>

                                                    <option value="25" >25</option>

                                                    <option value="26" >26</option>

                                                    <option value="27" >27</option>

                                                    <option value="28" >28</option>

                                                    <option value="29" >29</option>

                                                    <option value="30" >30</option>

                                                    <option value="31" >31</option>

                                            </select>
                                            <select name="bday_mm" id="sel-month" class="">
                                                <option value="">Bulan</option>

                                                    <option value="1" >Januari</option>

                                                    <option value="2" >Februari</option>

                                                    <option value="3" >Maret</option>

                                                    <option value="4" >April</option>

                                                    <option value="5" >Mei</option>

                                                    <option value="6" >Juni</option>

                                                    <option value="7" >Juli</option>

                                                    <option value="8" >Agustus</option>

                                                    <option value="9" >September</option>

                                                    <option value="10" >Oktober</option>

                                                    <option value="11" >November</option>

                                                    <option value="12" >Desember</option>

                                            </select>
                                            <select name="bday_yy" id="sel-year" class="">
                                                <option value="">Tahun</option>

                                                    <option value="2003" >2003</option>

                                                    <option value="2002" >2002</option>

                                                    <option value="2001" >2001</option>

                                                    <option value="2000" >2000</option>

                                                    <option value="1999" >1999</option>

                                                    <option value="1998" >1998</option>

                                                    <option value="1997" >1997</option>

                                                    <option value="1996" >1996</option>

                                                    <option value="1995" >1995</option>

                                                    <option value="1994" >1994</option>

                                                    <option value="1993" >1993</option>

                                                    <option value="1992" >1992</option>

                                                    <option value="1991" selected>1991</option>

                                                    <option value="1990" >1990</option>

                                                    <option value="1989" >1989</option>

                                                    <option value="1988" >1988</option>

                                                    <option value="1987" >1987</option>

                                                    <option value="1986" >1986</option>

                                                    <option value="1985" >1985</option>

                                                    <option value="1984" >1984</option>

                                                    <option value="1983" >1983</option>

                                                    <option value="1982" >1982</option>

                                                    <option value="1981" >1981</option>

                                                    <option value="1980" >1980</option>

                                                    <option value="1979" >1979</option>

                                                    <option value="1978" >1978</option>

                                                    <option value="1977" >1977</option>

                                                    <option value="1976" >1976</option>

                                                    <option value="1975" >1975</option>

                                                    <option value="1974" >1974</option>

                                                    <option value="1973" >1973</option>

                                                    <option value="1972" >1972</option>

                                                    <option value="1971" >1971</option>

                                                    <option value="1970" >1970</option>

                                                    <option value="1969" >1969</option>

                                                    <option value="1968" >1968</option>

                                                    <option value="1967" >1967</option>

                                                    <option value="1966" >1966</option>

                                                    <option value="1965" >1965</option>

                                                    <option value="1964" >1964</option>

                                                    <option value="1963" >1963</option>

                                                    <option value="1962" >1962</option>

                                                    <option value="1961" >1961</option>

                                                    <option value="1960" >1960</option>

                                                    <option value="1959" >1959</option>

                                                    <option value="1958" >1958</option>

                                                    <option value="1957" >1957</option>

                                                    <option value="1956" >1956</option>

                                                    <option value="1955" >1955</option>

                                                    <option value="1954" >1954</option>

                                                    <option value="1953" >1953</option>

                                                    <option value="1952" >1952</option>

                                                    <option value="1951" >1951</option>

                                                    <option value="1950" >1950</option>

                                                    <option value="1949" >1949</option>

                                                    <option value="1948" >1948</option>

                                                    <option value="1947" >1947</option>

                                                    <option value="1946" >1946</option>

                                                    <option value="1945" >1945</option>

                                                    <option value="1944" >1944</option>

                                                    <option value="1943" >1943</option>

                                                    <option value="1942" >1942</option>

                                                    <option value="1941" >1941</option>

                                                    <option value="1940" >1940</option>

                                                    <option value="1939" >1939</option>

                                                    <option value="1938" >1938</option>

                                                    <option value="1937" >1937</option>

                                            </select>
                                        </div>
                                    </li>
                                    <li>

                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <p class="fs-12 mt-20 mb-20">
                                            Dengan menekan Daftar Akun, saya mengkonfirmasi telah menyetujui <br/> <a class="green underline" href="#" target="_blank">Syarat dan Ketentuan</a>, serta <a class="green underline" href="#" target="_blank">Kebijakan Privasi</a> Easy Doctor.
                                        </p>
                                    </li>
                                </ul>

				                        <button type="submit" class="btn" href="signup_process.php">Daftar Akun </button>

				                    </form>
			                    </div>
                        	</dhp

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">

        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p></p>
        			</div>

        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
