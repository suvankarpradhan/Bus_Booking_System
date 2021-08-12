<?php include('dashbord_header.php');?>

<div class="container">
	<br>
		<legend>Cost Estimation Record 
			<a href="<?=base_url('admin/dashbord') ?>" class="btn btn-warning" role="button" style="float:right; ">Back</a>
			<button class="btn btn-outline-primary" onclick="exportTableToExcel('go_to_script')" style="float:right;">Downnload in excel</button></legend>
	</br>
	<table class="table" id="go_to_script">
		<thead>
			<th>Date</th>
			<th>Bus id</th>
			<th>Total Reserve</th>
			<th>Total Sale</th>			
		</thead>
		<tbody>
			<?php if( count($estimation) ): ?>
				<?php foreach($estimation as $estimate): ?>
				<tr>
					<td> <?= $estimate->date ?> </td>
					<td> <?= $estimate->bus_id ?> </td>
					<td> <?= $estimate->total_reserve ?> </td>
					<td> <?= $estimate->total_sale ?> </td>
				</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="7">
						No Records Found.
					</td>
				</tr>
			<?php endif; ?>

		</tbody>
	</table>
</div>

<script type="text/javascript">
	function exportTableToExcel(tableID, filename = 'cost_estimation'){

    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}

</script>
<?php include('dashbord_footer.php');?>