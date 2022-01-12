<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 4
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="corona.jpg" type="image/icon type">
    <title>   
    Covid Tracker</title>
</head>
<body>
<?php
	$data=file_get_contents(
	'https://api.covid19india.org/data.json');

	$coronalive =json_decode($data,true);

	$satecount = count($coronalive['statewise']);
?>

<marquee behavior="alternate" direction="">
   <strong> Data may be outdated.<br>
    This website is for my Learning Purpose.</strong>
</marquee>
<h3 class="text-center m-2 p-2">
  <small class="text-muted ">COVID-19 Tracker</small>
</h3>
<table class="table table-warning table-hover table-active table-striped m-2 p-2">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">State</th>
      <th scope="col">Last Updated</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Active</th>
      <th scope="col">Recovered</th>
      <th scope="col">Death</th>
    </tr>
  </thead>
  <tbody>
  <?php
				$i = 1;
				while($i < 38) {
				?>
				<tr>
                <td>
    <?php echo $i; ?>
					</td>
					<td>
<?php echo $coronalive['statewise'][$i]['state'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['confirmed'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['active'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['recovered'] ?>
					</td>

					<td>
<?php echo $coronalive['statewise'][$i]['deaths'] ?>
					</td>
				</tr>
				<?php $i++;
				}
				?>
  </tbody>
</table>
</body>
</html>