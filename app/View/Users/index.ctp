<?= $this->Session->flash(); ?>
<?= $this->Form->create('Client');?>
<?= $this->Form->input('nom',array('label'=>'nome :'));?>
<?= $this->Form->end("Save"); ?>
