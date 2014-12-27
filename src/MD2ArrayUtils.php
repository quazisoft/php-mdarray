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
     * Is column has only null values
     *
     * @param array $array
     * @param int $row (>=0)
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
     * Is column has only null values
     *
     * @param array $array
     * @param int $column (>=0)
     * @return boolean
     */
    public static function isNullColumn($array, $column)
    {
        $isNull = true;
        for ($row = 0; $row < count($array); $row ++) {
            if (null !== $array[$r][$column]) {
                $isNull = false;
                break;
            }
        }
        return $isNull;
    }
}

?>