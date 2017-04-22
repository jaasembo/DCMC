<?php
/**
  * @var \App\View\AppView $this
  */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Announcements'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="announcements form large-9 medium-8 columns content">
     
  
	<?= $this->Form->create('announcement', ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Add Announcement') ?></legend>
        
        <?php
            echo $this->Form->input('Holiday_name');
            echo $this->Form->textarea('Message');
             echo $this->Form->input('Image', array('type' => 'file'));
			 echo $this->Form->select('doctor_id',$DoctorList);
            echo $this->Form->input('reg_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>
