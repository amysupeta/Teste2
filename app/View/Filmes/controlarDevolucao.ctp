<?php
echo $this->Form->create(array('controller' => 'filmes', 'action' => 'controlarDevolucao', 'type' => 'post'));
echo $this->Form->input('buscador', array('class' => 'form-control','placeholder' => 'insert devolucao', 'label' => false));
echo $this->Form->submit('devolver', array('class'=>'btn btn-default'));
echo $this->Form->end();
?>  