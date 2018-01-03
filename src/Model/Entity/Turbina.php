<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turbina Entity
 *
 * @property int $id
 * @property string $rotor
 * @property string $estator
 * @property string $tobera
 * @property int $potencia_entrada
 * @property int $potencia_salida
 * @property int $temperatura_entrada
 * @property int $velocidad
 * @property int $presion_escape
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Turbina extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombre' => true,
        'rotor' => true,
        'estator' => true,
        'tobera' => true,
        'potencia_entrada' => true,
        'potencia_salida' => true,
        'temperatura_entrada' => true,
        'velocidad' => true,
        'presion_escape' => true,
        'created' => true,
        'modified' => true
    ];
}
