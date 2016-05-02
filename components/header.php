<?php 
if(isset($_GET['find'])){
	$keyword = $_GET['find'];	
}
else {
	$keyword = "";
}

 ?>

<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "WebSite",
	"url": "https://titikkoma.xyz/",
	"potentialAction": {
    	"@type": "SearchAction",
    	"target": [
      	"https://titikkoma.xyz?find={search_term_string}",
    	],
    	"query-input": "required name=search_term_string"
  	}
}
</script>


<header>
		<div class="container">
			<div class="row">
				<div class="col lg-3 lg-push-1">
					<div class="brand">
						<h1 id="title">
							<a href="/">
								TitikKoma
							</a>
						</h1>
						<p id="desc-title">
							Sebuah Program diakhiri dengan TitikKoma
						</p>
					</div>
				</div>
				<div class="col lg-3 lg-push-6">
					<form action="/" id="search-form">
					<input type="text" id="search" placeholder="Some Keyword..." name="find" value="<?php echo $keyword; ?>">
						<button>
							<i class="icon ion-ios-search"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</header>


	<script>
		var search = document.querySelector("#search-form input")
		search.addEventListener('click', function(){
			search.value = "";
		});
	</script>