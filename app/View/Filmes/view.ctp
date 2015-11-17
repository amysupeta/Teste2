<div class="filmes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Filme'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Filme'), array('action' => 'edit', $filme['Filme']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Filme'), array('action' => 'delete', $filme['Filme']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $filme['Filme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Filmes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Filme'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Estados'), array('controller' => 'estados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Estado'), array('controller' => 'estados', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($filme['Filme']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Titulo'); ?></th>
		<td>
			<?php echo h($filme['Filme']['titulo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Categoria'); ?></th>
		<td>
			<?php echo $this->Html->link($filme['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $filme['Categoria']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pessoa'); ?></th>
		<td>
			<?php echo $this->Html->link($filme['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $filme['Pessoa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estado'); ?></th>
		<td>
			<?php echo $this->Html->link($filme['Estado']['id'], array('controller' => 'estados', 'action' => 'view', $filme['Estado']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sinopse'); ?></th>
		<td>
			<?php echo h($filme['Filme']['sinopse']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Devolucao'); ?></th>
		<td>
			<?php echo h($filme['Filme']['devolucao']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

