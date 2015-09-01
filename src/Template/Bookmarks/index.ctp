<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Adicionar Bookmark'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Usuário'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="bookmarks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bookmarks as $bookmark): ?>
        <tr>
            <td><?= $this->Number->format($bookmark->id) ?></td>
            <td>
                <?= $bookmark->has('user') ? $this->Html->link($bookmark->user->id, ['controller' => 'Users', 'action' => 'view', $bookmark->user->id]) : '' ?>
            </td>
            <td><?= h($bookmark->title) ?></td>
            <td><?= h($bookmark->created) ?></td>
            <td><?= h($bookmark->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Exibir'), ['action' => 'view', $bookmark->id]) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bookmark->id]) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Deseja realmente apagar # {0}?', $bookmark->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
