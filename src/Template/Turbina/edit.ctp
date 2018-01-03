<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbina $turbina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actiones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $turbina->id],
                ['confirm' => __('¿Esta seguro de eliminar esta turbina?', $turbina->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Turbinas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turbina form large-9 medium-8 columns content">
    <?= $this->Form->create($turbina) ?>
    <fieldset>
        <legend><?= __('Editar Turbina') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('rotor');
            echo $this->Form->control('estator');
            echo $this->Form->control('tobera');
            echo $this->Form->control('potencia_entrada');
            echo $this->Form->control('potencia_salida');
            echo $this->Form->control('temperatura_entrada');
            echo $this->Form->control('velocidad');
            echo $this->Form->control('presion_escape');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
