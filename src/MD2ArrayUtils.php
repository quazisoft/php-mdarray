<?php
namespace Quazisoft\MDArray;

/**
 * 2-dimension array utils
 *
 * @author Victor Borisov (quazer.ru@gmail.com)
 *
 */
class MD2ArrayUtils
{

    /**
     * Doues row ($row) has only null values
     *
     * @param array $array
     * @param int $row row number (>=0)
     * @return boolean
     */
    public static function isNullRow($array, $row)
    {
        $isNull = true;
        for ($column = 0; $column < count($array[$row]); $column ++) {
            if (null !== $array[$row][$column]) {
                $isNull = false;
                break;
            }
        }
        return $isNull;
    }

    /**
     * Does column ($column) has only null values
     *
     * @param array $array
     * @param int $column column number (>=0)
     * @return boolean
     */
    public static function isNullColumn($array, $column)
    {
        $isNull = true;
        for ($row = 0; $row < count($array); $row ++) {
            if (null !== $array[$row][$column]) {
                $isNull = false;
                break;
            }
        }
        return $isNull;
    }
}

?>