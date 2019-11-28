<html lang="en">
    <head>
		
    </head>
    <body id="body">
        <table>
			<tr>
				<td> <img class="memoryGame" id="immagine1" src="ImmagineCorona.jpg" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][0][0]; ?>"  height=100 width=100></img> </td>
				<td> <img class="memoryGame" id="immagine2" src="ImmagineCorona.jpg" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][0][1]; ?>"  height=100 width=100></img> </td>
			<tr>
			<tr>
				<td> <img class="memoryGame" id="immagine3" src="ImmagineDesperados.jpg" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][1][0]; ?>"  height=100 width=100></img> </td>
				<td> <img class="memoryGame" id="immagine4" src="ImmagineDesperados.jpg" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][1][1]; ?>"  height=100 width=100></img> </td>
			<tr> 
			<tr>
				<td> <img class="memoryGame" id="immagine5" src="ImmagineHeineken.jfif" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][2][0]; ?>"  height=100 width=100></img> </td>
				<td> <img class="memoryGame" id="immagine6" src="ImmagineHeineken.jfif" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][2][1]; ?>"  height=100 width=100></img> </td> 
			<tr>
			<tr>
				<td> <img class="memoryGame" id="immagine7" src="ImmagineIchnusa.png" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][3][0]; ?>"  height=100 width=100></img> </td>
				<td> <img class="memoryGame" id="immagine8" src="ImmagineIchnusa.png" data-original-source=""  data-selected-source="<?php echo $_SESSION["images"][3][1]; ?>"  height=100 width=100></img> </td>
			<tr>
        </table>   
		<br>
		<br>
		<?php
			if(empty($_SESSION["nickname"]))
			{
				$nickNm = "Utente";
			}
			else
			{
				$nickNm = $_SESSION["nickname"];
			}
		?>
		<div id="visioneASchermo"> </div>
		<script>
			var numeroSelezionati = 0;
			/
				// if not we assume the current src is the selected one
				// and we reset it to the original src
				newSrc = currentSrc === originalSrc ? selectedSrc : originalSrc;

				// actually set the new src for the image
				image.setAttribute('src', newSrc);
				numeroSelezionati++;
				if(contX == 1)
				{
					if(winPrec==0)
					{
						immaginiPrecedentiDiDue[0].setAttribute('src', "black.png"); 
						immaginiPrecedentiDiDue[1].setAttribute('src', "black.png"); 						
					}
					contX = 0;
					winPrec = 0;
				}					
				if(numeroSelezionati==1 || numeroSelezionati == 0)
				{
					document.getElementById("visioneASchermo").innerHTML = "Seleziona un altra carta!";	
					immaginiPrecedentiDiDue[numeroSelezionati-1] = image;
				}					
				if(numeroSelezionati==2)
				{		immaginiPrecedentiDiDue[numeroSelezionati-1] = image;
						contX = 1;
						if(image.getAttribute('data-selected-source')==immaginePrecedente.getAttribute('data-selected-source'))
						{
							console.log("Coppia Trovata");
							document.getElementById("visioneASchermo").innerHTML = "Complimenti hai trovato una coppia " + nickname+ "!";
							image.removeEventListener('click', selectElementHandler);
							immaginePrecedente.removeEventListener('click', selectElementHandler);
							numeroCoppie++;
							winPrec = 1;
						}
						else
						{
							console.log("Non sono uguali");
							document.getElementById("visioneASchermo").innerHTML = "Non sono ugali le due coppie";
						}
						numeroSelezionati= 0;
				}					
					immaginePrecedente = image;


					
				console.log(numeroCoppie);
				if(numeroCoppie==4)
				{
					gameWon();
					numeroCoppie=0;
				}
			}

			function sleep(miliseconds) {
				var currentTime = new Date().getTime();

				while (currentTime + miliseconds >= new Date().getTime()) {
				}
			}			


			
		</script>
    </body>
	
</html>