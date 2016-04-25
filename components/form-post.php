

<div class="make-post">
	<div class="card">
		<h6>Create Post</h6>
		<form autocomplete="off" method="POST" action="../components/insert.php">
			<input type="text" placeholder="Name" name="title">
			
			<select name="distro" id="distro">
				<option value="">Select Distro supported</option>
				<option value="All">All Linux</option>
				<option value="apt-get">Ubuntu, Debian, Elementary, Xubuntu, Mint</option>
				<option value="pacman">Arch, Manjaro</option>
				<option value="rpm">Red Hat, CentOS</option>
				<option value="yum">Fedora</option>
				<option value="Ubuntu 14.04">Ubuntu 14.04</option>
				<option value="Linux Mint 17.03">Linux Mint 17.03</option>
				<option value="Arch Linux">Arch Linux</option>
				<option value="Debian">Debian</option>
			</select>

			<select name="category" id="categories">
				<option value="">Select Category</option>
				<option value="all Aplication">All Application</option>
				<option value="programming">Programming</option>
				<option value="office">Office</option>
				<option value="multimedia">Multimedia</option>
				<option value="internet">Internet</option>
				<option value="utillity">Utillity</option>
			</select>

			<div class="group-form">
				<label>
					<input name="arsitektur" value="32" type="checkbox">
					<span>32 bit</span>
				</label>
				<label>
					<input name="arsitektur" value="64" type="checkbox">
					<span>64 bit</span>
				</label>
				<label>
					<input name="arsitektur" value="3264" type="checkbox">
					<span>64 bit & 32 bit</span>
				</label>
			</div>

			<textarea name="desc" id="" cols="20" rows="10"></textarea>



			<div id="preview">
				<div class="header">
					<span>Preview</span>
				</div>
				<div class="code">
					
				</div>
			</div>
			
			<button type="submit" name="tambah" value="submit" id="tambah">PUBLISH</button>
			<button type="reset" name="reset" value="reset">RESET</button>
		</form>
	</div>
</div>


