<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turbina Model
 *
 * @method \App\Model\Entity\Turbina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Turbina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Turbina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Turbina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Turbina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Turbina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Turbina findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TurbinaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('turbina');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('rotor', 255);

        $validator
            ->scalar('rotor')
            ->maxLength('rotor', 255);

        $validator
            ->scalar('estator')
            ->maxLength('estator', 255);

        $validator
            ->scalar('tobera')
            ->maxLength('tobera', 255);

        $validator
            ->integer('potencia_entrada');

        $validator
            ->integer('potencia_salida');

        $validator
            ->integer('temperatura_entrada');

        $validator
            ->integer('velocidad');

        $validator
            ->integer('presion_escape');

        return $validator;
    }
}
