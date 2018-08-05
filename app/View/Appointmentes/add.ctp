<?php

if(!$this->request->is('post') )
		{

			$map_options = array(
			    'id' => 'map_canvas',
			    'width' => '100%',
			    'height' => '600px',
			    'style' => '',
			    'zoom' => 15,
			    'custom' => null,
			    'localize' => true,
			    'type'=>'ROADMAP',
			    'marker' => true,
			    'markerTitle' => 'This is my position',
			    'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
			    'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
			    'infoWindow' => true,
			    'windowText' => 'My Position',
			    'draggableMarker' => false
			  );

			



			
			    // Override any of the following default options to customize your marker
			    $marker_options = array(
			        'showWindow' => true,
			        'windowText' => 'Marker',
			        'markerTitle' => 'Title',
			        'markerIcon' => 'https://developers.google.com/maps/documentation/javascript/images/default-marker.png',
			        'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
			        'draggableMarker' => true
			    );

			    
			

		

		echo '<div >'.$this->Form->create('Appointmente',array('label'=>'Enrégistré un RDV pour Mr :'.$nom_client['Client']['NOM'].' ')).'<fieldset class="fieldset"><legend>Déclarer un rendez_vous </legend>'.'<div class="google-map-1">'.$this->GoogleMap->map($map_options).
		$this->GoogleMap->addMarker("map_canvas", 1, array('latitude' => 30.415837, 'longitude' => -9.560042), $marker_options).'</div>'.
	
				$this->Form->input('TYPE',array('separator' => '----------','label'=>'','hidden'=>'hidden','options'=>array('rdv_r_condicteur'=>'Rendez_vous de récupération des tapis chez le client ','rdv_l_condicteur'=>'rendez_vous de livré au clien','rdv_r'=>'Entré de tapis ','rdv_l'=>'fin de traitment d\'une tapis'))).
				$this->Form->input('latitude',array('id'=>"latitude_1")).
				$this->Form->input('longitude',array('id'=>"longitude_1",'required'=>'required' )).
				//$this->Form->input('COORDONNEES').
				$this->Form->input('DATE',array('label'=>'date : ')). 

				$this->Form->input('HEURE',array('label'=>'heure')).

				$this->Form->input('VIREFICATION_RDV_',array('label'=>'','hidden'=>'hidden','options'=>array('le rendez-vous et en liste d\'attent','le rendez-vous se fait en temps actuelle ' ))).
				''.
				$this->Form->submit(
    'Enregistrer', 
    array('class' => 'success button', 'title' => 'Custom Title')
);
				$this->Form->end().'</fieldset>';

}




?>