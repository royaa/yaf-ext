<?php
/**
 * smarty plugin
 * @package smarty
 * @subpackage plugins
 */


/**
 * smarty string_format modifier plugin
 *
 * Type:     modifier<br>
 * Name:     string_format<br>
 * Purpose:  format strings via sprintf
 * @link http://smarty.php.net/manual/en/language.modifier.string.format.php
 *          string_format (smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_string_format($string, $format)
{
    return sprintf($format, $string);
}

/* vim: set expandtab: */

?>
