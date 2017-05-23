<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Rate
 * @author     Eddynguyen <anjakahuy@gmail.com>
 * @copyright  2017 Eddy Nguyen
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Date controller class.
 *
 * @since  1.6
 */
class RateControllerDate extends JControllerForm
{
	/**
	 * Constructor
	 *
	 * @throws Exception
	 */
	public function __construct()
	{
		$this->view_list = 'dates';
		parent::__construct();
	}
}
