<div id="cluster_info">
	<h3>Cluster Name: <?=$cluster_name;?></h3>

	Cluster Partitioner: <?=$partitioner;?><br />
	Cluster Snitch: <?=$snitch;?><br />
	Thrift API Version: <?=$thrift_api_version?>
</div>

<?=$success_message?>
<?=$error_message?>

<p>
Keyspaces and Column Families:		
	<ul id="keyspaces">
		<?
			for ($i = 0; $i < count($keyspaces_name); $i++):
				$keyspace_name = $keyspaces_name[$i];
				echo '<li><a href="describe_keyspace.php?keyspace_name='.$keyspace_name.'">'.$keyspace_name.'</a>';
				echo '<ul>';
					for ($j = 0; $j < count($keyspaces_details[$i]['columnfamilys_name']); $j++):
						$columnfamily_name = $keyspaces_details[$i]['columnfamilys_name'][$j];
						echo '<li><a href="describe_columnfamily.php?keyspace_name='.$keyspace_name.'&columnfamily_name='.$columnfamily_name.'">'.$columnfamily_name.'</a></li>';
					endfor;
					echo '</ul>';
				
				echo '</li>';
			endfor;
		?>
	</ul>		
</p>

<h3>Actions</h3>

- <a href="keyspace_action.php?action=create">Create a New Keyspace</a><br />