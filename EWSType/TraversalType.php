<?php
/**
 * Contains EWSType_TraversalType.
 */

/**
 * Defines the type of traversal to use for a folder.
 *
 * @package php-ews\Enumerations
 */
class EWSType_TraversalType extends EWSYType
{
    /**
     * Represents a deep folder traversal.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DEEP = 'Deep';

    /**
     * Represents a shallow folder traversal.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SHALLOW = 'Shallow';

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
