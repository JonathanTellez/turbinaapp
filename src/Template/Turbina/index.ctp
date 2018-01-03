<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbina[]|\Cake\Collection\CollectionInterface $turbina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actiones') ?></li>
        <li><?= $this->Html->link(__('Nueva Turbina'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turbina index large-9 medium-8 columns content">
    <h3><?= __('Turbina') ?></h3>
    <div class="datagrid">
        <table>
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('rotor') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('estator') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('tobera') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('potencia_entrada') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('potencia_salida') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('temperatura_entrada') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('velocidad') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('presion_escape') ?></th>
                    <th scope="col" class="actions"><?= __('Aciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($turbina as $turbina): ?>
                <tr>
                    <td><?= h($turbina->nombre) ?></td>
                    <td><?= h($turbina->rotor) ?></td>
                    <td><?= h($turbina->estator) ?></td>
                    <td><?= h($turbina->tobera) ?></td>
                    <td><?= $this->Number->format($turbina->potencia_entrada) ?></td>
                    <td><?= $this->Number->format($turbina->potencia_salida) ?></td>
                    <td><?= $this->Number->format($turbina->temperatura_entrada) ?></td>
                    <td><?= $this->Number->format($turbina->velocidad) ?></td>
                    <td><?= $this->Number->format($turbina->presion_escape) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $turbina->id],['class' => 'btn btn-primary']) ?>
                        <br><br>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $turbina->id],['class' => 'btn btn-edit']) ?>
                        <br><br>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $turbina->id],['class' => 'btn btn-delete']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
