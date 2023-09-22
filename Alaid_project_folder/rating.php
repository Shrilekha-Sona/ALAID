
<html>
	<head>
	<title>Star Rating</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		.rated{
		color:yellow;
		}
		span#s1{ color:magenta;}
		</style>
	</head>
	<body>
		<h1 align=center>RATE US</h1>
		<form align=center action="insert_rating.php" method="post" class="center">
		<table align=center>
		<label for="feel">Rating:</label>
		<select name="feel" id="feel">
		<option value="5">5</option>
		<option value="4">4</option>
		<option value="3">3</option>
		<option value="2">2</option>
		<option value="1">1</option>
		</select>
		<br><br>
		<td>Feedback:</td><br><br><td><Textarea name="fb" rows=5 cols=40 placeholder="Type your message here..."></textarea></td>
		<tr>
		</tr>
		<table>
		</form>
		<center><input type="submit" name="submit" value="Submit"><center>
		<br>
		<?php
			if(isset($_POST['submit']))
				{
				$feel=$_POST['feel'];
					if($feel==1)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
		?>
		<?php if($feel==1.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($feel==2)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($feel==2.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($feel==3)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($feel==3.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($feel==4)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star " style="font-size:24px"></span>					
						
					<?php
					}
				
				
		?>
		<?php if($feel==4.5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
					<span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star-half rated " style="font-size:24px"></span>&nbsp					
						
					<?php
					}
				
				
		?>
		<?php if($feel==5)
					{?>
		
					<span class="fa fa-star rated" style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>
                    <span class="fa fa-star rated " style="font-size:24px"></span>					
						
					<?php
					}
				}
				
		?>
		
	</body>
</html>

