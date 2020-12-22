<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Du musst dich zuerst einloggen";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: register.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<div class="header">
			<h1>Weihnachten ist keine Jahreszeit. Es ist ein Gefühl!</h1>
			<h2>"Wer Weihnachten nicht in seinem Herzen trägt, wird es nie unter dem Weihnachtsbaum finden."<br><cite>-- Edna Ferber</cite></h2>
		</div>		
		<div class="grid-container">
			<div id="p1">
			
				<!-- Angemeldete Benutzerinformationen -->
				<?php  if (isset($_SESSION['username'])) : ?>
					<h3>Herzlich willkommen <strong><?php echo $_SESSION['username']; ?></strong></h3>
			</div>
			
			<div id="p2">
				<button class="bar_item" onclick="openTab('brief')">Einen Brief schreiben</button>
				<button class="bar_item" onclick="openTab('singen')">Zusammen singen</button>
				<button class="bar_item" onclick="openTab('zuschauen')">Gemeinsam zuschauen</button>
			</div>
			
			<div id="p3">
				<div id="brief" class="item" style="display:none">
					<textarea name="myBrief" ROWS=5 COLS=35 wrap=soft class="textarea">Lieber Weihnachtsmann,..... </textarea>
					<input type="submit" name="submit" value="Abschicken">
				</div>
				<div id="singen" class="item" style="display:none">
					<figure id="f1">
						<img src="lied2.jpg" alt="O Tannenbaum" style="width:100%">
					</figure>
					<figure id="f1">
						<img src="lied.jpg" alt="O Tannenbaum" style="width:100%">
					</figure>
				</div>
				<div id="zuschauen" class="item" style="display:none">
					<iframe width="700" height="400" src="https://www.youtube.com/embed/HrnAmWcm8ds" frameborder="0" autoplay allowfullscreen></iframe>
				</div>
				<script>
				function openTab(tabName) {
					var i;
					var x = document.getElementsByClassName("item");
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					document.getElementById(tabName).style.display = "block";  
				}
				</script>
		</div>
		<div id="footer">
			<div id="p4">
				<p><a href="index.php?logout='1'" style="color: red; text-align: center;">Logout</a></p>
				<?php endif ?>
			</div>
			<div>
				<!-- Benachrichtigung -->
				<?php if (isset($_SESSION['success'])) : ?>
					<div class="error success" >
						<h3>
						<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
						?>
						</h3>
					</div>
				<?php endif ?>
			</div>
		</div>
	</body>
</html>
