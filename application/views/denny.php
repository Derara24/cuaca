<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
</head>
<body>

<p>Nama Saya <?php echo $nama ?></p>
<h3>Ramalan Cuaca :</h3>
    
<ul>
    <?php foreach(	(array) $data as $item) { ?>
    <?php $date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s',@$item->jamCuaca); ?>

	<li>
        Cuaca kota singkawang hari <?php echo @$date->format('l'); ?> 
        tanggal <?php echo @$date->format('d M Y'); ?> 
        jam <?php echo @$date->format('H:i'); ?> 
        adalah <b><?php echo $item->cuaca; ?> </b>
        dengan suhu <?php echo $item->tempC; ?>°C. 
    </li>
    <?php } ?>
   </ul> 
</body>
</html>

