<div class="users form">
    <?= $this->Flash->render() ?>
    <div class="users form content">
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Login') ?></legend>
            <?= $this->Form->control('email', ['required' => true]) ?>
            <?= $this->Form->control('password', ['required' => true]) ?>
        </fieldset>
        <?= $this->Form->submit(__('Login')); ?>
        <?= $this->Form->end() ?>
        </div>
</div>