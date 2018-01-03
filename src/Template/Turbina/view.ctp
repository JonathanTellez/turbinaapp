<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbina $turbina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actiones') ?></li>
        <li><?= $this->Html->link(__('Editar Turbina'), ['action' => 'edit', $turbina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Turbina'), ['action' => 'delete', $turbina->id], ['confirm' => __('¿Esta seguro de eliminar esta turbina?', $turbina->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Turbina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Turbina'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turbina view large-9 medium-8 columns content">
    <h3><?= h($turbina->nombre) ?> - turbina # <?= h($turbina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($turbina->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rotor') ?></th>
            <td><?= h($turbina->rotor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estator') ?></th>
            <td><?= h($turbina->estator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tobera') ?></th>
            <td><?= h($turbina->tobera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turbina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Potencia Entrada') ?></th>
            <td><?= $this->Number->format($turbina->potencia_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Potencia Salida') ?></th>
            <td><?= $this->Number->format($turbina->potencia_salida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temperatura Entrada') ?></th>
            <td><?= $this->Number->format($turbina->temperatura_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Velocidad') ?></th>
            <td><?= $this->Number->format($turbina->velocidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presion Escape') ?></th>
            <td><?= $this->Number->format($turbina->presion_escape) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($turbina->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($turbina->modified) ?></td>
        </tr>
    </table>
</div>
