

<nav>
	<div class='wifeo_conteneur_menu'>
		<div class='wifeo_rubrique'>
			<a href='#mw999'>COMMANDES</a>
			<div class='wifeo_sousmenu'>
				<div class='wifeo_pagesousmenu'>
				<?=$this->Html->link('nouveau client',array('controller'=>'Clients','action'=>'add'));?>
				</div>
				<div class='wifeo_pagesousmenu'>
					
					<?=$this->Html->link('ancien client ',array('controller'=>'Clients','action'=>'find_client'));?>
				</div>
				
				
			</div>
			
	
</nav>

