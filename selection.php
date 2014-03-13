<?php 
	$userrole = array('root', 'developer');
	include("security.php"); 
?>
<script style="text/javascript">
	$("document").ready(function()
	{
		//alert("Hallo wereld! Dit is mijn eerste jquery code en test of jquery werkt");
		
		// Maak een selector voor het element of elementen waar je een
		// actie op wilt plegen.
		$("button").click(function()
		{
			$("p").toggle(500);
		});		
	});
	
	
</script>
<u>Dit is een jquery oefening met het maken van selectors</u><br>
<button>Verberg eerste paragraaf</button>
<button>Verberg tweede paragraaf</button>
<p id='eerste'>Dit is de eerste paragraaf</p>
<p id='tweede'>Dit is de tweede paragraaf</p>