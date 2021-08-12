<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice Page</title>
		<?=link_tag('assets/css/Style1.css')?>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address >
				<p>User Name : <?= $userinfo->f_name ?>&nbsp<?= $userinfo->l_name ?></p>
				<p>Phone- <?= $userinfo->phone ?><br>Email- <?= $userinfo->email ?></p>
				<p>(800) 555-1234</p>
			</address>
			<img src="<?php echo base_url('assets/LOGO.png')?>" width="250px " " height= 100px">
		</header>
		<article>
			<h1>Recipient </h1>
			<address >
				<p>Starbus Bus Service Organization<br><i><small>Licence No. 987456321</small></i></p>
			</address>
			<table class="meta">
				<tr>
					<th>Ticket ID #</th>
					<td><?= $ticket_id['ticket_id']?></td>
				</tr>
				<tr>
					<th>Date</th>
					<td><?php echo date('Y-m-d')?></td>
				</tr>
				<tr>
					<th>Paid Amount</th>
					<td><?= $info['total_fare']?></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th>Date</th>
						<th>Bus Name</th>
						<th>Source</th>
						<th>Destination</th>
						<th>Per seat price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= $info['date'] ?></td>
						<td><?= $selectbus->bus_name ?></td>
						<td><?= $selectbus->source ?></td>
						<td><?= $selectbus->destination?></td>
						<td><?= $selectbus->fare?></td>
					</tr>
				</tbody>
			</table>
			<table class="balance">
				<tr>
					<th>Payment Mode</th>
					<td><span>Cash</td>
				</tr>
				<tr>
					<th>Seat Quantity</th>
					<td><?= $info['bookseat_no']?></td>
				</tr>
				<tr>
					<th>Total Fare</th>
					<td><?= $info['total_fare']?></td>
				</tr>
			</table>
		</article>
		<br><br><br>
		<p>We wish your safe,comfotable and happy journey..Thank You.</p>
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		<aside>
			<h1>Additional Notes</h1>
			<div >
				<p>All charges are collected including JST of 4.5% as per Govt. rule.</p>
				<button onclick="myFunction()">Print</button>
				<a class="nav-link" href="<?=base_url('homecontrol/home1') ?>">Home <span class="sr-only">(current)</span></a>
			</div>
		</aside>
				<script>
		function myFunction() {
		  window.print();
		}
		</script>
	</body>
</html>