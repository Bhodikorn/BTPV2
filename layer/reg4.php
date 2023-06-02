/*
<?php 
// D:\BPT\layer\detect-sqli.php
require_once('../connect.php');
require_once('../layer/log-sqli.php');

function detect_sqli($string)
{
    // First layer regex patterns
    $layer1Patterns = array (
        "/'/",
        '/"/',
        '/\/\*/',
        "/=/",
        '/^\s*(--|#|\/\*)/',
    );

    // Second layer regex patterns
    $layer2Patterns = array (
        '/[\0\b]/',
        '/[\n\r]/',
        '/[\t]/',
        '/[\%]/',
        '/[\_]/',
        '/\\\\/',
        '/select.+from/i',
        '/insert.+into/i',
        '/update.+set/i',
        '/delete.+from/i',
        '/drop/i',
        '/truncate/i',
        '/alter/i',
        '/exec/i',
        '/xp_cmdshell/i',
        '/sp_executesql/i',
        '/create.+procedure/i',
        '/declare/i',
        '/xp_regwrite/i',
        '/xp_regdelete/i',
        '/(union.*select|select.*from.*(select|insert|update|delete))/i',
        '/(select|update).+from.*where.*\(/i',
        '/(sleep|benchmark)\(/i',
        '/;\s*WAITFOR\s+DELAY\s+\'\\\d{1,2}:\\\d{1,2}:\\\d{1,2}\'\s*;/i',
        '/--/i',
        '/#/',
        '/\/\//',
        '/\*[^(\*\/)]*\*\//',
        '/^[\s\t]*set[\s\t]+/',
        '/^[\s\t]*declare[\s\t]+/',
        '/^[\s\t]*exec[\s\t]+/',
        '/--.*\n/i',
        '/#.*\n/i',
        '/\/\/.*\n/i',
    );

    // Third layer regex patterns
    $layer3Patterns = array (
        '/\b(?:all|any|not|and|between|in|like|or|some)\b.*[\=\>\<=\!\~]+/i',
        '/contains/i',
        '/let.+?=/i',
        '/begin.+end/i',
    );

    // Check input against first layer patterns
    foreach ($layer1Patterns as $pattern) {
        if (preg_match($pattern, $string)) {
            log_sqli($string);
            return true;
        }
    }

    // Check input against second layer patterns
    foreach ($layer2Patterns as $pattern) {
        if (preg_match($pattern, $string)) {
            // Check input against third layer patterns
            foreach ($layer3Patterns as $pattern) {
                if (preg_match($pattern, $string)) {
                    log_sqli($string);
                    return true;
                }
            }
            // If input doesn't match third layer patterns, assume safe
            return false;
        }
    }

    // If input doesn't match second layer patterns, assume safe
    return false;
}
*/
