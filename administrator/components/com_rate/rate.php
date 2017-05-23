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

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_rate'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Rate', JPATH_COMPONENT_ADMINISTRATOR);
JLoader::register('RateHelper', JPATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'rate.php');

$controller = JControllerLegacy::getInstance('Rate');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
