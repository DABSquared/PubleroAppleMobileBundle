<?php
namespace Publero\AppleMobileBundle\ReceiptVerifier\Exception;

/**
 * @author Martin Hlaváč <info@mhlavac.net>
 */
class InvalidResponseDataException extends \RuntimeException
{
    public function __construct()
    {
        parent::__construct('Invalid response data');
    }
}
