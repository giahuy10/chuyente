<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_stats
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JModelLegacy::addIncludePath(JPATH_SITE . '/components/com_rate/models', 'RateModel');
$model = JModelLegacy::getInstance('Dates', 'RateModel', array('ignore_request' => true));
$appParams = JFactory::getApplication()->getParams();
$model->setState('params', $appParams);
$dates = $model->getItems();
//var_dump($dates);

?>
<table>
	<thead>
		<tr>
			<th>Thời gian</th>
			<th>Mua vào</th>
			<th>Bán ra</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($dates as $date) {?>
			<tr>
				<td><?php echo $date->time?> <?php echo $date->date?></td>
				<td><?php echo $date->buy_rate?></td>
				<td><?php echo $date->offer_rate?></td>
			</tr>
		<?php }?>
	</tbody>
</table>

