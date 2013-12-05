	<h1>Beania message board admin panel</h1>

	<div>
		{foreach from=$warnings item=item}
		{$item}</br>
		{/foreach}
	</div>

	{if $logged}
<p><a href="view.php">Zoznam príspevkov</a>.</p>
	<table>
        <thead>
            <tr>
                <th>meno</th>
                <th>cas</th>
                <th>sprava</th>
                <th>akcia</th>
            </tr>
        </thead>
        <tbody>
		{foreach from=$messages item=item}
			<tr class="status{$item.status}">
			<td>{$item.user|escape:'htmlall':'UTF-8'}</td>
			<td>{$item.posted_at|date_format:"%d.%m.%Y %H:%M"}</td>
			<td>{$item.text|escape:'htmlall':'UTF-8'}</td>
			<td>
				<form action="?" method="post">
				<input type="hidden" name="id" value="{$item.id}"/>
				{if $item.status==1}
					<input type="hidden" name="action" value="hide"/>
					<input type="submit" name="submit" value="skry" class="small button"/>
				{else}
					<input type="hidden" name="action" value="show"/>
					<input type="submit" name="submit" value="zobraz" class="small button"/>
			{/if}
				</form>
			</td>
			</tr>
		{/foreach}
        </tbody>
	</table>
	{else}
	<div>
		<form action="?login" method="post">
			heslo: <input type="password" name="pass"/>
			<input type="submit" name="submit" value="login"/>
		</form>
	</div>
	{/if}
