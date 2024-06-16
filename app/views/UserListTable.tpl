<table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["name"]}</td>
		<td>{$p["surname"]}</td>
		<td>{$p["birthdate"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}userEdit/{$p['id_user']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('{$conf->action_url}userDelete/{$p['id_user']}','Czy na pewno usunąć rekord ?')">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>