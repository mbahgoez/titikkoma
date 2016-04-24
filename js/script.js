NProgress.configure({showSpinner: true});
NProgress.start();

var idContent = document.getElementById('content');

	window.addEventListener("load", function(){
		window.setInterval(function(){
			idContent.classList.add("show");
			NProgress.done();
		}, 1500);
	});


var contentElem = $(".desc-app");
	
contentElem.on('click', function(){

	$this = $(this);

	$this.toggleClass("bg-color");
	$this.next().fadeToggle();
	

});


$(document).ready(function(){




	var preview = $("#preview .code");
	var selection = $("#distro");

	selection.on('change', function(){
		var val = selection.val();

		preview.html("<p>Supported <b>"+val+"</b> 64 Bit & 32 Bit</p>");
	});



	var textarea = document.querySelector(".make-post textarea");


	var autoText =  [
			{
				before:/<script/i,
				after:"Tidak Boleh Memasang Javascript"
			},
			{
				before:/for {/i,
				after:"Tidak Boleh Melakukan Perulangan"
			},
			{
				before:/for{/i,
				after:"Tidak Boleh Melakukan Perulangan"
			},
			{
				before:/<style/i,
				after:"Tidak boleh melakukan styleing CSS"
			},
			{
				before:/function {/i,
				after:"<i>function {</i>"
			},
			{
				before:"<?php",
				after:"Dilarang Memasang PHP"
			},
			{
				before:"?>",
				after:"Dilarang Memasang PHP"
			},
			{
				before:/:rumah/i,
				after:"<i class='icon ion-home'></i>"
			},
			{
				before:/:senang/i,
				after:"<i class='icon ion-happy-outline'></i>"
			},
			{
				before:/:linux/i,
				after:"<i class='icon ion-social-tux'></i>"
			},
			{
				before:/:musik/i,
				after:"<i class='icon ion-headphone'></i>"
			},
			{
				before:/:quote/i,
				after:"<i class='icon ion-quote'></i>"
			},
			{
				before:/kontol/i,
				after:"Burung"
			},
			{
				before:/lolok/i,
				after:"Burung"
			},
			{
				before:/:!rokok/i,
				after:"<i class='icon ion-no-smoking'></i>"
			},
			{
				before:/:makan/i,
				after:"<i class='icon ion-pizza'></i>"
			},
			{
				before:/:he3x/i,
				after:"hehehe..."
			},
			{
				before:/hello/i,
				after:"changed"
			}
		];


	textarea.addEventListener('keyup', function(){
		var val = textarea.value;

		for(var i = 0;i<autoText.length;i++){

			val = val.replace(autoText[i].before, autoText[i].after);
		}

		preview.html(val);
	});


	// $("#search").on('keyup', function(){
	// 	var find = $("#search").val();

	// 	// $.get('../components/search-results.php', {
	// 	// 	"find":find
	// 	// }).done(function(data){
	// 	// 	$("#listview").html(data);
	// 	// });

	// 	$.ajax({

	// 	})
	// });


	$("input[name='tambah']").on('click', function(){

	});



});

