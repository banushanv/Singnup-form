<html>
<head>
<title>Labsheet 4</title>
</head>
<style>
    .index{
        background-color: #233145;
    }
    .tophead{
        background-color: #ec971f;
        text-align: left;
		
    }
    table{
        width: 40%;

    }
    tr{
        mso-cellspacing: 10px;
        color: #d39e00;
        font-size: medium;
        font-weight: bold;
    }
	.a:link, a:visited{
		background-color: #f44336;
		color: white;
		padding: 14px 25px;
		margin-right:15px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}
    .rcorners1 {
        border-radius: 5px;
        width: 100%;
        height: 30px;

    }
    .rcorners2 {
        border-radius: 5px;
        width: 40%;
        height: 30px;

    }
	.rcorners2b {
        border-radius: 5px;
        height: 30px;
        color: white;
        background-color: #ec971f;
        width: 30%;
        font-size: 16px;
		margin-left:20px;

    }
    .rcorners3 {
        border-radius: 5px;
        width: 20%;
        height: 30px;

    }
    .rcorners4 {
        border-radius: 5px;
        width: 35%;
        height: 30px;

    }

    .sub{
        border-radius: 5px;
        color: white;
        background-color: green;
        height: 50px;
        width: 40%;
        font-size: 16px;
    }
	
	.upd{
        border-radius: 5px;
        color: white;
        background-color: #ec971f;
        height: 0px;
        width: 40%;
        font-size: 16px;
    }

    .can{
        border-radius: 5px;
        color: white;
        background-color: red;
        height: 50px;
        width: 40%;
        font-size: 16px;
    }

    td{
        font-family: "Nunito", sans-serif;
        font-size: 15px;
    }
</style>
<body>

<form action="query.php" method="POST">
    <table align="center" cellpadding="15px" cellspacing="0">
        <thead class="tophead">
            <th><h2><font color="#d35400">Sign Up</font> </h2></th>
            <th></th>
        </thead>
        <tbody class= "index">
        <tr>
            <td align="right">First Name</td>
            <td><input type ="text" name = "firstname" class="rcorners1" placeholder="Enter First Name" required></td>
        </tr>

        <tr>
            <td align="right">Last Name</td>
            <td><input type ="text" name = "lastname" class="rcorners1" placeholder="Enter Last Name" required></td>
        </tr>

        <tr>
            <td align="right">Screen Name</td>
            <td><input type ="text" name = "screenname" class="rcorners1" placeholder="Enter Screen Name" required></td>
        </tr>

        <tr>
            <td align="right">Date of Birth</td>
            <td><select name= "month" class="rcorners2">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select name = "day" class="rcorners3">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select name = "year" class="rcorners4">
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>

                </select> </td>
        </tr>

        <tr>
            <td align="right">Gender</td>
            <td>
			<input type="radio" name="gender" value="male" checked /> Male
            <input type="radio" name="gender" value="female" /> Female
            </td>
        </tr>

        <tr>
            <td align="right">Country</td>
            <td><select name ="country" class="rcorners1">
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Greenland">Greenland</option>
                    <option value="India">India</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Newzeland">Newzeland</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Russia">Russia</option>
                    <option value="Singapore">Singapore</option>
                    <option value="SriLanka">Sri Lanka</option>
                    <option value="USA">USA</option>
                </select></td>
        </tr>

        <tr>
            <td align="right">E-mail</td>
            <td><input type ="text" name = "email" class="rcorners1" placeholder="Enter E-mail..." required></td>
        </tr>

        <tr>
            <td align="right">Phone</td>
            <td><input type ="text" name = "phone" class="rcorners1" placeholder="Enter Phone..." required></td>
        </tr>

        <tr>
            <td align="right">Password</td>
            <td><input type ="password" name = "password" class="rcorners1" required></td>
        </tr>

        <tr>
            <td align="right">Confirm Password</td>
            <td><input type ="password" name = "confirm_password" class ="rcorners1" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox" name="agree" value="agree">I Agree to the Terms of Use</td>

        </tr>

        <thead class="tophead">
        <th></th>
        <th align="right">
		<a href="update.php">Update</a>
		<input class ="sub" type="submit" name="add"  value="Submit">  
		<input class ="can" name ="fcancel" type="submit" value="Cancel">

		</th>

        </thead>

        </tbody>

    </table>

</form>
</body>
</html>