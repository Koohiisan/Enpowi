<?php
if(!defined('Modular')) die('Direct access not permitted');

use Enpowi\Pages\Page;
use Enpowi\Modules\DataOut;

$id = (new DataOut())
	->add('pages', Page::pages())
	->bind();

?><div
	v-module
	data="<?php echo $id?>"
	class="container">
	<table class="table table-hover click">
		<thead>
		<tr>
			<th v-t>Page Name</th>
			<th v-t>Last Edited</th>
			<th v-t>Created By</th>
		</tr>
		</thead>
		<tbody>
		<tr v-repeat="page : pages" v-on="click : go('page?name=' + page.name)">
			<td>{{ page.name }}</td>
			<td>{{ page.created }}</td>
			<td>{{ page.createdBy }}</td>
		</tr>
		</tbody>
	</table>
</div>