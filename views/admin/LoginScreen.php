
<style>
header {
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 36%;
	padding:0;
	color:#f38630;
	font-size:30px;
}
h1 {
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	text-align: center;
	margin-top: 2px;
    margin-bottom: 2px;
}
article {
        box-shadow: 0px 0px 30px 0px rgba(0,0,0,1);
	color:white;
	padding: 6px 2px 6px 1px;
        position: absolute;
        top: 50%;
        left: 50%;
        
        transform: translate(-50%, -50%);
}
input{
	border: 2px solid #ddd;
	margin: 2px 20px;
}
#log {
	background-color: white;

}
#wrong {
    font-weight: bold;
    position: absolute;
    color: red;
    transform: translate(-50%, -50%);
    left:50%;
    bottom: 34%;
}    
</style>

<header>	
    <h1>Admin</h1>
</header>
	<article>
		<form method="POST" action="/admin.php">
			<input placeholder="login" type="text" name="login"><br/><br/>
			<input placeholder="password" type="password" name="pass"><br/><br/>
			<input id="log" type="submit" value="Zaloguj">
		</form>
	</article>
<?php 

if (isset($this->var_test)) {
echo "<p id='wrong'> Nieprawidłowe hasło lub login </p>";
}



?>