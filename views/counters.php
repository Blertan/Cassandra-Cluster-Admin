<ul class="breadcrumb">
	<li>
		<a href="index.php"><?php echo $cluster_name; ?></a> <span class="divider">/</span>
	</li>
	<li>
		<a href="describe_keyspace.php?keyspace_name=<?php echo $keyspace_name; ?>"><?php echo $keyspace_name; ?></a> <span class="divider">/</span>
	</li>
	<li>
		<a href="describe_columnfamily.php?keyspace_name=<?php echo $keyspace_name; ?>&amp;columnfamily_name=<?php echo $columnfamily_name; ?>"><?php echo $columnfamily_name; ?></a> <span class="divider">/</span>
	</li>
	<li class="active">
		Counters
	</li>
</ul>

<?php echo $success_message; ?>
<?php echo $error_message; ?>

<form method="post" action="columnfamily_action.php" class="well">
	<div>
		<label for="key">Row Key:</label>
		<input id="key" name="key" type="text" />
	</div>

	<?php if ($is_super_cf): ?>
	<div>
		<label for="super_column">Super Column Name:</label>
		<input id="super_column" name="super_column" type="text" />
	</div>
	<?php endif;?>
	
	<div>
		<label for="column">Column name:</label>
		<input id="column" name="column" type="text" />
	</div>
	
	<div>
		<label for="action">Action:</label>
		<select id="action" name="action">
			<option value="inc">Increment</option>
			<option value="dec">Decrement</option>
		</select>
	</div>
	
	<div>
		<label for="key">Value:</label>
		<input id="value" name="value" type="text" value="1" />
	</div>	
	
	<div>
		<input type="submit" class="btn btn-primary" name="btn_modify_counter" value="Modify Counter" />
		
		<input type="hidden" name="keyspace_name" value="<?php echo $keyspace_name; ?>" />
		<input type="hidden" name="columnfamily_name" value="<?php echo $columnfamily_name; ?>" />
	</div>
</form>