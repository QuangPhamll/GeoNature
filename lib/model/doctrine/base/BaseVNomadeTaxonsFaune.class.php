<?php

/**
 * BaseVNomadeTaxonsFaune
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_nom
 * @property integer $cd_ref
 * @property integer $cd_nom
 * @property string $nom_latin
 * @property string $nom_francais
 * @property integer $id_classe
 * @property integer $denombrement
 * @property boolean $patrimonial
 * @property string $message
 * @property boolean $contactfaune
 * @property boolean $mortalite
 * @property BibNoms $BibNoms
 * @property CorUniteTaxon $CorUniteTaxon
 * @property TRelevesCf $TRelevesCf
 * 
 * @method integer            get()              Returns the current record's "id_nom" value
 * @method integer            get()              Returns the current record's "cd_ref" value
 * @method integer            get()              Returns the current record's "cd_nom" value
 * @method string             get()              Returns the current record's "nom_latin" value
 * @method string             get()              Returns the current record's "nom_francais" value
 * @method integer            get()              Returns the current record's "id_classe" value
 * @method integer            get()              Returns the current record's "denombrement" value
 * @method boolean            get()              Returns the current record's "patrimonial" value
 * @method string             get()              Returns the current record's "message" value
 * @method boolean            get()              Returns the current record's "contactfaune" value
 * @method boolean            get()              Returns the current record's "mortalite" value
 * @method BibNoms            get()              Returns the current record's "BibNoms" value
 * @method CorUniteTaxon      get()              Returns the current record's "CorUniteTaxon" value
 * @method TRelevesCf         get()              Returns the current record's "TRelevesCf" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "id_nom" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "cd_ref" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "cd_nom" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "nom_latin" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "nom_francais" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "id_classe" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "denombrement" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "patrimonial" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "message" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "contactfaune" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "mortalite" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "BibNoms" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "CorUniteTaxon" value
 * @method VNomadeTaxonsFaune set()              Sets the current record's "TRelevesCf" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVNomadeTaxonsFaune extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactfaune.v_nomade_taxons_faune');
        $this->hasColumn('id_nom', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('cd_ref', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('cd_nom', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('nom_latin', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('nom_francais', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('id_classe', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('denombrement', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('patrimonial', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
        $this->hasColumn('message', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('contactfaune', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
        $this->hasColumn('mortalite', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibNoms', array(
             'local' => 'id_nom',
             'foreign' => 'id_nom'));

        $this->hasOne('CorUniteTaxon', array(
             'local' => 'id_nom',
             'foreign' => 'id_nom'));

        $this->hasOne('TRelevesCf', array(
             'local' => 'id_nom',
             'foreign' => 'id_nom'));
    }
}