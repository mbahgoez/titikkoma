

<div class="make-post">
	<div class="card">
		<h6>Buat Post</h6>
		<form autocomplete="off" method="POST" action="../components/insert.php">
			<input type="text" placeholder="Name" name="title">
			
			<select name="distro" id="distro">
				<option value="">Pilih Distro</option>
				<option value="apt-get">Ubuntu, Elementary, Xubuntu, Mint</option>
				<option value="Ubuntu 14.04">Ubuntu 14.04</option>
				<option value="Linux Mint 17.03">Linux Mint 17.03</option>
				<option value="Arch Linux">Arch Linux</option>
				<option value="Debian">Debian</option>
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


