<!DOCTYPE html>

<html>
<head>
 <title>Form site</title>

</head>
<body>
	
<h1>Expense and Income Tracker</h1>
<br>
	

<style>
h1{
	background-color:#4682B4;
	padding: 20px;
	margin: 20px;
	text-align: center;
	border-color: blue;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.split {
    height: 50%;
    width: 30%;
    top: 1%;
    position: absolute;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.left {
    left: 0;
    background-color: #4CD2FF;
    background-image: 
    position: absolute;
    top: 100px;
    right: 0;
    width: 100%;
    height: 100%;
}

.right {
    right: 0;
    background-color: grey;
    position: absolute;
    top: 100px;
    right: 0;
    width: 50%;
    height: 50%;
    

}

</style>
	<div class="split left" align="center" >
	<h3>Expense</h3>

		<form method="post" action="insert.php" >
			<div>
		    	<span>Type:</span> 
		      		<select name="type" id="Type1">
		          	<option value="food">food</option>
		          	<option value="transport">transport</option>
		          	<option value="rent">rent</option>
		          	<option value="other">other</option>
		      		</select>
		  		</div>
		  		<br>
		Info : <input type="text" name="username"><br><br>
		Amount : <input type="text" name="amount"><br><br>
		<div>
		    <span>Date:</span> <input type="date" name="date">
		 </div>
		 <br><br>

		 <h3>
				Income
			</h3>
		 <br>Amount : <input type="text" name="income"><br><br>

		<input type="submit" value="Submit">
		<br><br>
		
		<a href="first.php" class="button">click here to view all the Income and Expenses</a>
		</form>
		</div>

		

</body>
</html>






