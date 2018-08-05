<div class="small-3 columns" >
<?


$map_options = array(
    'id' => 'map_canvas',
    'width' => '800px',
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

?>



<?
    // Override any of the following default options to customize your marker
    $marker_options = array(
        'showWindow' => true,
        'windowText' => 'Marker',
        'markerTitle' => 'Title',
        'markerIcon' => 'http://labs.google.com/ridefinder/images/mm_20_purple.png',
        'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
        'draggableMarker' => true
    );

       
            

           // echo  $this->GoogleMap->map($map_options); 
             //echo $this->GoogleMap->addMarker("map_canvas", 1, array('latitude' => 30.415837, 'longitude' => -9.560042), $marker_options); 
        
?>


<input type="text" id="latitude_1" />
<input type="text" id="longitude_1" />

</div >
<div class="small-5 columns" >

	<?php
   echo $this->Form->input('message', array('class' => 'form-control')), 
        $this->Editor->render('message', array('height' => '200','weidth'=>'120')); 
?>
</div >

