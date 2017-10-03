<?php

class MasClassGroup extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $ClassGroupID;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=true)
     */
    public $ClassGroupTh;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=true)
     */
    public $ClassGroupEn;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $ClassGroupSorting;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $RecordStatus;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $CreateDate;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $CreateUser;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $LastDate;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $LastUser;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("example");
        $this->setSource('masclassgroup');
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mas_class_group';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MasClassGroup[]|MasClassGroup
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MasClassGroup
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
