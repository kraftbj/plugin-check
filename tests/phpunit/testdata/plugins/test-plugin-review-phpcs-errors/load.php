<?php
/**
 * File contains errors related to plugin review PHPCS issues.
 */
?>
<?
/**
 * Check for PHP short tag and DeprecatedFunctions.
 */

ob_start();
    the_author_email();
$the_author_email = ob_get_clean();

$var_post_not_sanitized = $_POST['not_sanitized'];
