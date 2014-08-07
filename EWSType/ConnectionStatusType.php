<?php
/**
 * Contains EWSType_ConnectionStatusType.
 */

/**
 * Provides a text description of the status of a streaming subscription.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ConnectionStatusType extends EWSType
{
    /**
     * Specifies that the connection has been closed.
     */
    const CLOSED = 'Closed';

    /**
     * Specifies that the connection is open.
     */
    const OK = 'OK';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
