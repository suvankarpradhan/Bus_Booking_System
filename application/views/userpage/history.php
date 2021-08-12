<?php include('history_header.php');?>

<div class="container">
	<br>
		<legend>Your History 
			<a href="<?=base_url('homecontrol/home1') ?>" class="btn btn-outline-warning" role="button" style="float:right;">Back</a>
			<button class="btn btn-outline-primary" onclick="exportTableToExcel('go_to_script')" style="float:right;">Downnload in excel</button></legend>
	</br>
	<table class="table" id="go_to_script">
		<thead>
			<th>Ticket id</th>
			<th>Date</th>
			<th>Bus id</th>
			<th>Bookseat_No</th>
			<th>Total Fare</th>			
		</thead>
		<tbody>
			<?php if( count($user_history) ): ?>
				<?php foreach($user_history as $user_history): ?>
				<tr>
					<td> <?= $user_history->ticket_id ?> </td>
					<td> <?= $user_history->date ?> </td>
					<td> <?= $user_history->bus_id ?> </td>
					<td> <?= $user_history->bookseat_no ?> </td>
					<td> <?= $user_history->total_fare ?> </td>
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
	function exportTableToExcel(tableID, filename = 'Your History'){

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
<?php include('userdetail_footer.php');?>