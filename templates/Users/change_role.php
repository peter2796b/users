<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __d('cake_d_c/users', 'Select a new role') ?></legend>

        <?= $this->Form->select('role', $availableRoles, ['empty' => false]); ?>
        <?= $this->Form->control('is_superuser', ['type' => 'checkbox','label'=>'Superuser']);?>

    </fieldset>
    <?= $this->Form->button(__d('cake_d_c/users', 'Submit')); ?>
    <?= $this->Form->end() ?>
</div>
