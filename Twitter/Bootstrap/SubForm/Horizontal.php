<?php
/**
 * Base form class definition
 *
 * @category Forms
 * @package Twitter
 * @subpackage Bootstrap
 * @author Christian Soronellas <csoronellas@emagister.com>
 */

/**
 * An "horizontal" Twitter Bootstrap's UI subform
 *
 * @category Forms
 * @package Twitter_Bootstrap
 * @subpackage SubForm
 * @author Adeline Cachier <acachier@1g6.biz>
 */
class Twitter_Bootstrap_SubForm_Horizontal extends Twitter_Bootstrap_Form_Horizontal
{
    /**
     * Whether or not form elements are members of an array
     * @var bool
     */
    protected $_isArray = true;

    public function __construct($options = null)
    {
        $options['isSubform'] = true;
        parent::__construct($options);
    }

}
