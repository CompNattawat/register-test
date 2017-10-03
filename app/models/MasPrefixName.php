<?php

class MasPrefixName extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $PrefixNameID;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $PrefixNameTh;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $PrefixNameEn;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $InitialsTh;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $InitialsEn;

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
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mas_prefix_name';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MasPrefixName[]|MasPrefixName
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MasPrefixName
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
