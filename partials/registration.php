<h2> Sign up! </h2>
<form id="userRegistrationForm" method="POST">
	<table width="100%">
		<tr>
			<td width="15%">Username:</td>
			<td>
				<input type="text" value="testtest" placeholder="Enter Username" name="username" id="username">
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" value="testtest" placeholder="Enter Password" name="pass1" id="pass1">
			</td>
		</tr>
		<tr>
			<td>Re-Enter:</td>
			<td>
				<input type="password" value="testtest" placeholder="Re-Enter Password" name="pass2" id="pass2">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" id="userReg_btn" value="Sign up!">

				<input type="hidden" id="dataSource" name="dataSource" value="userRegistration"/>
			</td>
		</tr>
	</table>
</form>