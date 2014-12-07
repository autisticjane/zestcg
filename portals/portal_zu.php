<?php session_start();if (isset($_SESSION['USR_LOGIN'])=="") {	header("Location:login.php");}
include("mytcg/settings.php");
include("$header");
?>

<?php
$select = mysql_query("SELECT * FROM `$table_members` WHERE email='$_SESSION[USR_LOGIN]'");
while($row=mysql_fetch_assoc($select)) {
	if($row[candyland]=="0") {
		?>
	<h1>Zest U</h1>
	<p>Before you can register for classes, you need these school supplies!</p>
	<p>Objectives marked with an asterisk (*) allow you to use previously completed tasks (i.e. master 5 decks) toward objective completion.</p>
	<p>Log how you obtained these. You can use the forum's Objective Tracker forum to track your objectives more easily. Make sure you have them handy when you go to validate story objective completion.</p>
	<p>These supplies will get you through your first 5 courses, so don't lose any of them.</p>
		
	<table width="100%">
		<tr><td width="5%" style="padding: 5px;"><b>#<b></td><td width="90%"><b>Necessary Supplies</h2><b></td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">1</td><td valign="middle">Forum account</td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">1</td><td valign="middle">Level 2</td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">3</td><td valign="middle">Milk cards</td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">3</td><td valign="middle">Butter</td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">3</td><td valign="middle">Cocoa cards</td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">20</td><td valign="middle">Lemons</td></tr>
		<tr><td valign="middle" style="padding: 5px;" align="right">1</td><td valign="middle">Member card</td></tr>
	</table>
	<?php
	}
	elseif($row[candyland]=="2") {
		?>
		<h1>Zest U</h1>
		<p>You've completed all 50 classes of Zest University! You can now play the weekly games up to two times weekly total.</p>
		[request diploma link]
		<?php
	}
	else {
		?>
<h1>Zest University</h1>
		<table width="100%"><tr><td width="25%" style="padding: 5px;" valign="middle" style="text-align:center"><?php
	if($row[membercard]=="Yes") {
		echo "<img src=\"cards/$row[name]00.png\" />";
	}
	else {
		echo "<img src=\"cards/$row[name]00.png\" />";
	}
	?></td><td width="75%" style="padding:5px;" valign="middle" style="text-align:left">Welcome to your member panel, <u><?php echo $row[name]; ?></u>! From here you can submit various forms, edit your info, and play all of the games here at <?php echo $tcgname; ?>!</td></tr></table>

	<?php
	}
}
include("$footer"); ?>