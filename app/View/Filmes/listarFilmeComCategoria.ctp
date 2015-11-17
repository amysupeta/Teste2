<?php
echo $this->Form->create(array('controller' => 'filmes', 'action' => 'ListarfilmesComCategoria', 'type' => 'post'));
echo $this->Form->input('buscador', array('class' => 'form-control','placeholder' => 'insert categoria', 'label' => false));
echo $this->Form->submit('Procurar', array('class'=>'btn btn-default'));
echo $this->Form->end();
?>

<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Filme'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Filmes'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Estados'), array('controller' => 'estados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Estado'), array('controller' => 'estados', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Filme', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('titulo', array('class' => 'form-control', 'placeholder' => 'Titulo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('categoria_id', array('class' => 'form-control', 'placeholder' => 'Categoria Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pessoa_id', array('class' => 'form-control', 'placeholder' => 'Pessoa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('estado_id', array('class' => 'form-control', 'placeholder' => 'Estado Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sinopse', array('class' => 'form-control', 'placeholder' => 'Sinopse'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('devolucao', array('class' => 'form-control', 'placeholder' => 'Devolucao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->