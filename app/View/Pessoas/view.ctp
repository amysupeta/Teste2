<div class="pessoas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pessoa'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Pessoa'), array('action' => 'edit', $pessoa['Pessoa']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Pessoa'), array('action' => 'delete', $pessoa['Pessoa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pessoa['Pessoa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pessoas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pessoa'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Filmes'), array('controller' => 'filmes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Filme'), array('controller' => 'filmes', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($pessoa['Pessoa']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($pessoa['Pessoa']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Idade'); ?></th>
		<td>
			<?php echo h($pessoa['Pessoa']['idade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sexo'); ?></th>
		<td>
			<?php echo h($pessoa['Pessoa']['sexo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bairro'); ?></th>
		<td>
			<?php echo h($pessoa['Pessoa']['bairro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Distrito'); ?></th>
		<td>
			<?php echo h($pessoa['Pessoa']['distrito']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bi'); ?></th>
		<td>
			<?php echo h($pessoa['Pessoa']['bi']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Filmes'); ?></h3>
	<?php if (!empty($pessoa['Filme'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Sinopse'); ?></th>
		<th><?php echo __('Devolucao'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($pessoa['Filme'] as $filme): ?>
		<tr>
			<td><?php echo $filme['id']; ?></td>
			<td><?php echo $filme['titulo']; ?></td>
			<td><?php echo $filme['categoria_id']; ?></td>
			<td><?php echo $filme['pessoa_id']; ?></td>
			<td><?php echo $filme['estado_id']; ?></td>
			<td><?php echo $filme['sinopse']; ?></td>
			<td><?php echo $filme['devolucao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'filmes', 'action' => 'view', $filme['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'filmes', 'action' => 'edit', $filme['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'filmes', 'action' => 'delete', $filme['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $filme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Filme'), array('controller' => 'filmes', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
