

<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<?= $this->Html->link('MESSAGES ',array('controller'=>'Messages','action'=>'inbox'))	;?>	

			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('nouveau  ',array('controller'=>'Messages','action'=>'compose'))	;?>	</a>
				</div>
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('reçus ',array('controller'=>'messages','action'=>'inbox'))	;?>	</a>
				</div>			
				<div class='wifeo_pagesousmenu'>
					<?= $this->Html->link('envoyés ',array('controller'=>'messages','action'=>'outbox'))	;?>	</a>
				</div>		
			</div>
			

</nav>