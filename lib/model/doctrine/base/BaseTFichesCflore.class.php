<?php

/**
 * BaseTFichesCflore
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_cflore
 * @property string $insee
 * @property integer $id_organisme
 * @property integer $id_protocole
 * @property integer $id_lot
 * @property date $dateobs
 * @property integer $altitude_saisie
 * @property integer $altitude_sig
 * @property integer $altitude_retenue
 * @property timestamp $date_insert
 * @property timestamp $date_update
 * @property boolean $supprime
 * @property integer $pdop
 * @property integer $srid_dessin
 * @property string $saisie_initiale
 * @property blob $the_geom_local
 * @property blob $the_geom_3857
 * @property LCommunes $LCommunes
 * @property TProtocoles $TProtocoles
 * @property BibLots $BibLots
 * @property Doctrine_Collection $CorRoleFicheCflore
 * @property Doctrine_Collection $TRelevesCflore
 * 
 * @method integer             get()                   Returns the current record's "id_cflore" value
 * @method string              get()                   Returns the current record's "insee" value
 * @method integer             get()                   Returns the current record's "id_organisme" value
 * @method integer             get()                   Returns the current record's "id_protocole" value
 * @method integer             get()                   Returns the current record's "id_lot" value
 * @method date                get()                   Returns the current record's "dateobs" value
 * @method integer             get()                   Returns the current record's "altitude_saisie" value
 * @method integer             get()                   Returns the current record's "altitude_sig" value
 * @method integer             get()                   Returns the current record's "altitude_retenue" value
 * @method timestamp           get()                   Returns the current record's "date_insert" value
 * @method timestamp           get()                   Returns the current record's "date_update" value
 * @method boolean             get()                   Returns the current record's "supprime" value
 * @method integer             get()                   Returns the current record's "pdop" value
 * @method integer             get()                   Returns the current record's "srid_dessin" value
 * @method string              get()                   Returns the current record's "saisie_initiale" value
 * @method blob                get()                   Returns the current record's "the_geom_local" value
 * @method blob                get()                   Returns the current record's "the_geom_3857" value
 * @method LCommunes           get()                   Returns the current record's "LCommunes" value
 * @method TProtocoles         get()                   Returns the current record's "TProtocoles" value
 * @method BibLots             get()                   Returns the current record's "BibLots" value
 * @method Doctrine_Collection get()                   Returns the current record's "CorRoleFicheCflore" collection
 * @method Doctrine_Collection get()                   Returns the current record's "TRelevesCflore" collection
 * @method TFichesCflore       set()                   Sets the current record's "id_cflore" value
 * @method TFichesCflore       set()                   Sets the current record's "insee" value
 * @method TFichesCflore       set()                   Sets the current record's "id_organisme" value
 * @method TFichesCflore       set()                   Sets the current record's "id_protocole" value
 * @method TFichesCflore       set()                   Sets the current record's "id_lot" value
 * @method TFichesCflore       set()                   Sets the current record's "dateobs" value
 * @method TFichesCflore       set()                   Sets the current record's "altitude_saisie" value
 * @method TFichesCflore       set()                   Sets the current record's "altitude_sig" value
 * @method TFichesCflore       set()                   Sets the current record's "altitude_retenue" value
 * @method TFichesCflore       set()                   Sets the current record's "date_insert" value
 * @method TFichesCflore       set()                   Sets the current record's "date_update" value
 * @method TFichesCflore       set()                   Sets the current record's "supprime" value
 * @method TFichesCflore       set()                   Sets the current record's "pdop" value
 * @method TFichesCflore       set()                   Sets the current record's "srid_dessin" value
 * @method TFichesCflore       set()                   Sets the current record's "saisie_initiale" value
 * @method TFichesCflore       set()                   Sets the current record's "the_geom_local" value
 * @method TFichesCflore       set()                   Sets the current record's "the_geom_3857" value
 * @method TFichesCflore       set()                   Sets the current record's "LCommunes" value
 * @method TFichesCflore       set()                   Sets the current record's "TProtocoles" value
 * @method TFichesCflore       set()                   Sets the current record's "BibLots" value
 * @method TFichesCflore       set()                   Sets the current record's "CorRoleFicheCflore" collection
 * @method TFichesCflore       set()                   Sets the current record's "TRelevesCflore" collection
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTFichesCflore extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactflore.t_fiches_cflore');
        $this->hasColumn('id_cflore', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('insee', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('id_organisme', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('id_protocole', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('id_lot', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('dateobs', 'date', 25, array(
             'type' => 'date',
             'length' => 25,
             ));
        $this->hasColumn('altitude_saisie', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('altitude_sig', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('altitude_retenue', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('date_insert', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('date_update', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('supprime', 'boolean', 1, array(
             'type' => 'boolean',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('pdop', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('srid_dessin', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('saisie_initiale', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('the_geom_local', 'blob', null, array(
             'type' => 'blob',
             'length' => '',
             ));
        $this->hasColumn('the_geom_3857', 'blob', null, array(
             'type' => 'blob',
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('LCommunes', array(
             'local' => 'insee',
             'foreign' => 'insee'));

        $this->hasOne('TProtocoles', array(
             'local' => 'id_protocole',
             'foreign' => 'id_protocole'));

        $this->hasOne('BibLots', array(
             'local' => 'id_lot',
             'foreign' => 'id_lot'));

        $this->hasMany('CorRoleFicheCflore', array(
             'local' => 'id_cflore',
             'foreign' => 'id_cflore'));

        $this->hasMany('TRelevesCflore', array(
             'local' => 'id_cf',
             'foreign' => 'id_cf'));
    }
}