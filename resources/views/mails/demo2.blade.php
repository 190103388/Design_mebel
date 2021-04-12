<?php 
$error = NULL;

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="POST" action="">
 		@csrf
 		<table border="0" align="center" cellpadding="5">
 			<tr>
 				<td align="right">USERNAME:</td>
 				<td><input type="TEXT" name="username" required/></td>
 			</tr>
 			<tr>
 				<td align="right">PASSWORD:</td>
 				<td><input type="PASSWORD" name="password" required/></td>
 			</tr>
 			<tr>
 				<td align="right">EMAIL:</td>
 				<td><input type="Email" name="email" required/></td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center"> <input type="SUBMIT"></td>
 				}
 			</tr>


 		</table>

 	</form>

 </body>
 </html>