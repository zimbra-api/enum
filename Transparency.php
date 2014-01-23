<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Enum;

/**
 * Transparency enum class
 *
 * @package   Zimbra
 * @category  Enum
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class Transparency extends Base
{
    /**
     * Constant for value 'Opaque'
     * @return string 'O'
     */
    const O = 'O';

    /**
     * Constant for value 'Transparent'
     * @return string 'T'
     */
    const T = 'T';
}
