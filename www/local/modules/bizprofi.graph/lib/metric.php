<?php

namespace Bizprofi\Graph;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\FloatField;
use Bitrix\Main\Entity\DateTimeField;
use Bitrix\Main\Entity\Validator;
use Bitrix\Main\Localization\Loc;


Loc::loadMessages(__FILE__);

class MetricTable extends DataManager
{
    public static function getTableName()
    {
        return 'bizprofi_graph_metric';
    }

    public static function getMap()
    {
        return array(
            new IntegerField('ID', array(
                'autocomplete' => true,
                'primary' => true,
                'title' => Loc::getMessage('BIZPROFI_GRAPH_TABLE_ID'),
            )),
            new StringField('HOST', array(
                'required' => true,
                'title' => Loc::getMessage('BIZPROFI_GRAPH_TABLE_HOST'),
                'validation' => function () {
                    return array(
                        new Validator\Length(1, 4),
                    );
                },
            )),
            new FloatField('VALUE', array(
                'required' => true,
                'title' => Loc::getMessage('BIZPROFI_GRAPH_TABLE_VALUE'),
            )),
            new DateTimeField('TIMESTAMP', array(
                'required' => true,
                'title' => Loc::getMessage('BIZPROFI_GRAPH_TABLE_TIMESTAMP'),

            )),
        );
    }

    public static function deleteAll()
    {
        if(!is_callable(array(get_parent_class(__CLASS__), "deleteAll"))){
            global $DB;
            return $DB->Query("TRUNCATE TABLE " . self::getTableName(), true);
        } else {
            return parent::deleteAll();
        }
    }
}
