
<?= $this->Form->create($prescription) ?>
<section class="workspace">
    <div class="workspace-body">
        <div class="page-heading">
            <ol class="breadcrumb breadcrumb-small">
                <li><a href="<?=$this->Url->build(array('action' => 'index' )) ?>" title="<?= __('Prescription') ?>"> <?= __('Prescription') ?></a></li>
                <li class="active"><a href="#">Edit <?= __('Prescription') ?></a></li>
            </ol>
        </div>
        <div class="main-container" style="background: #E08D2C">
            <div class="content" style="padding: 0px 38px">

                <?php include('element.ctp'); ?>

            </div>
        </div>
    </div>

    <footer class="footer ">
        <div class="flex-container">
            <a href="<?php echo $this->Url->build(array('action' => 'index' )) ?>" class="btn btn-default  btn-cancel" title="Cancel">Cancel</a>
            <div class="flex-item">
                <?= $this->Form->button(__('Submit'), ['class' => 'btn save event-save']) ?>
            </div>
        </div>
    </footer>
    
</section>
<?= $this->Form->end() ?>
