<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="./">CALL &#38; NICHOLAS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li <?php echo ($page == 'about') ? 'class="active"' : '';?>> <a class="nav-link" href="./about.php">About</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Services
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="./openpit.php">OPEN PIT</a>
						<a class="dropdown-item" href="./underground.php">UNDERGROUND</a>
						<a class="dropdown-item" href="./hydrogeology.php">HYDROGEOLOGY</a>
						<a class="dropdown-item" href="./geology.php">GEOLOGY</a>
						<a class="dropdown-item" href="./other.php">OTHER SERVICES</a>
					</div>
				</li>
				<li <?php echo ($page == 'about') ? 'class="active"' : '';?>> <a class="nav-link" href="./careers.php">Careers</a></li>
				<li <?php echo ($page == 'about') ? 'class="active"' : '';?>> <a class="nav-link" href="./contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>