<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Rate
 * @author     Eddynguyen <anjakahuy@gmail.com>
 * @copyright  2017 Eddy Nguyen
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Rate', JPATH_COMPONENT);
JLoader::register('RateController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Rate');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
