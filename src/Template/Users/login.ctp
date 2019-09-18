<div class="users login form content">
    <div class="panel clearfix">
        <h3 class="text-center">PatientManager Login</h3>
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create() ?>
            <?= $this->Form->input('email') ?>
            <?= $this->Form->input('password') ?>
        <?= $this->Form->button(__('Login'), ['style' => 'margin: 0']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>