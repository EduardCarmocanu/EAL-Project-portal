<nav>
	<ul>
		<div id="top-nav-elements-container">
			<a href="<?php 
				if (isset($_GET['prev'])) {
					echo $_GET['prev'];
				}
				else {
					echo '/module-3-portal';
				}
			 ?>">
				<li id="side-menu-trigger" class=" menu-item"><h4><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Back</h4></li>
			</a>
			<li class="nav-right menu-item"><h4>logIn &nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></h4></li>
			<a href="/module-3-portal/about.php?prev=/module-3-portal"><li class="nav-right menu-item"><h4>About &nbsp;<i class="fa fa-info" aria-hidden="true"></i></h4></li></a>
			<a href="/module-3-portal/"><li class="nav-right menu-item"><h4>Home &nbsp;<i class="fa fa-home" aria-hidden="true"></i></h4></li></a>
		</div>
	</ul>
</nav>
