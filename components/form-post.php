

<div class="make-post">
	<div class="card">
		<h6>Create Post</h6>
		<form autocomplete="off" method="POST" action="../components/insert.php">
			<input type="text" placeholder="Name" name="title">
			<input type="text" placeholder="Slug" name="slug">
			<input type="text" placeholder="Keywords" name="keywords">
			<input type="text" placeholder="Description for SEO" name="metadesc">
			<select name="distro" id="distro">
				
				<option value="">Select Distro or Package Manager</option>
	
				<optgroup label="-------------------------------------">
					<option value="All">All Linux</option>
				</optgroup>
	
				<optgroup label="Package Manager">
					<option value="apt-get">apt-get</option>
					<option value="pacman">pacman</option>
					<option value="rpm">rpm</option>
					<option value="yum">yum</option>
				</optgroup>
				<optgroup label="Distro">
					<option value="ubuntu">Ubuntu</option>
					<option value="mint">Linux Mint</option>
					<option value="arch">Arch Linux</option>
					<option value="debian">Debian</option>
				</optgroup>
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
			<button type="reset" name="reset" value="reset" id="reset">RESET</button>
		</form>
	</div>
</div>


