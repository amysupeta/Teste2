<div class="pessoas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Pessoa'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Pessoa.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Pessoa.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pessoas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Filmes'), array('controller' => 'filmes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Filme'), array('controller' => 'filmes', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Pessoa', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('idade', array('class' => 'form-control', 'placeholder' => 'Idade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sexo', array('class' => 'form-control', 'placeholder' => 'Sexo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bairro', array('class' => 'form-control', 'placeholder' => 'Bairro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('distrito', array('class' => 'form-control', 'placeholder' => 'Distrito'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bi', array('class' => 'form-control', 'placeholder' => 'Bi'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
