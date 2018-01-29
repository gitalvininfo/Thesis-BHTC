<?php require 'require/geotagging_query.php'?>
<?php require 'require/geotagging_query_gender.php'?>
<?php require 'require/geotagging_query_type.php'?>
<?php require 'require/geotagging_query_tc.php'?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>BHTC-PMIS-GIS</title>
		<link rel="icon" href="../assets/images/project_logo.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" id="theme" href="../css/theme-brown.css" />
		<link rel="stylesheet" type="text/css" href="../assets2/vendor/font-awesome/css/font-awesome.min.css" />
		<script src="../js/plugins/jquery/jquery.min.js"></script>
		<style type="text/css">
			body
			{
				font-family: Arial;
				font-size: 10pt;
			}
		</style>
	</head>
	<body>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdesR37nt3_QOaZ6JrWvsf_LfjQM5QdH4&callback=initMap"async defer></script>
		<script type="text/javascript">
			var markers = [
				{
					"title": 'Abcasa',
					"lat": '10.6889836',
					"lng": '122.9923541',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Abcasa <br><?php echo $f1['total']?></b> Patients registered in this area <br> <b><?php echo $g1['total']?></b> Male <br> <b> <?php echo $h1['total']?></b> Female <br> <b> <?php echo $c1['total']?></b> Children <br> <b> <?php echo $a1['total']?></b> Adult <hr> <b> <?php echo $t1['total']?></b> Currently in Treatment <br> <b><?php echo $ok1['total']?></b> Cured'
				},
				{
					"title": 'Alangilan',
					"lat": '10.6713924',
					"lng": '123.0533146',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Alangilan <br><?php echo $f2['total']?></b> Patients registered in this area <br> <b><?php echo $g2['total']?></b> Male <br> <b> <?php echo $h2['total']?></b> Female <br> <b> <?php echo $c2['total']?></b> Children <br> <b> <?php echo $a2['total']?></b> Adult <hr> <b> <?php echo $t2['total']?></b> Currently in Treatment <br> <b><?php echo $ok2['total']?></b> Cured'
				},
				{
					"title": 'Alijis',
					"lat": '10.6356089',
					"lng": '122.9447114',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Alijis <br><?php echo $f3['total']?></b> Patients registered in this area <br> <b><?php echo $g3['total']?></b> Male <br> <b> <?php echo $h3['total']?></b> Female <br> <b> <?php echo $c3['total']?></b> Children <br> <b> <?php echo $a3['total']?></b> Adult <hr> <b> <?php echo $t3['total']?></b> Currently in Treatment <br> <b><?php echo $ok3['total']?></b> Cured'
				},
				{
					"title": 'Banago',
					"lat": '10.7076066',
					"lng": '122.9517592',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Banago <br><?php echo $f4['total']?></b> Patients registered in this area <br> <b><?php echo $g4['total']?></b> Male <br> <b> <?php echo $h4['total']?></b> Female <br> <b> <?php echo $c4['total']?></b> Children <br> <b> <?php echo $a4['total']?></b> Adult <hr> <b> <?php echo $t4['total']?></b> Currently in Treatment <br> <b><?php echo $ok4['total']?></b> Cured'
				},
				{
					"title": 'Bata',
					"lat": '10.7008715',
					"lng": '122.9579088',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Bata <br><?php echo $f5['total']?></b> Patients registered in this area <br> <b><?php echo $g5['total']?></b> Male <br> <b> <?php echo $h5['total']?></b> Female <br> <b> <?php echo $c5['total']?></b> Children <br> <b> <?php echo $a5['total']?></b> Adult <hr> <b> <?php echo $t5['total']?></b> Currently in Treatment <br> <b><?php echo $ok5['total']?></b> Cured'
				},
				{
					"title": 'Cabug',
					"lat": '10.5990638',
					"lng": '122.9431808',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Cabug <br><?php echo $f6['total']?></b> Patients registered in this area <br> <b><?php echo $g6['total']?></b> Male <br> <b> <?php echo $h6['total']?></b> Female <br> <b> <?php echo $c6['total']?></b> Children <br> <b> <?php echo $a6['total']?></b> Adult <hr> <b> <?php echo $t6['total']?></b> Currently in Treatment <br> <b><?php echo $ok6['total']?></b> Cured'
				},
				{
					"title": 'Estefania',
					"lat": '10.6826793',
					"lng": '122.9606782',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Estefania <br><?php echo $f7['total']?></b> Patients registered in this area <br> <b><?php echo $g7['total']?></b> Male <br> <b> <?php echo $h7['total']?></b> Female <br> <b> <?php echo $c7['total']?></b> Children <br> <b> <?php echo $a7['total']?></b> Adult <hr> <b> <?php echo $t7['total']?></b> Currently in Treatment <br> <b><?php echo $ok7['total']?></b> Cured'
				},
				{
					"title": 'Felisa',
					"lat": '10.59793',
					"lng": '122.9683964',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Felisa <br><?php echo $f8['total']?></b> Patients registered in this area <br> <b><?php echo $g8['total']?></b> Male <br> <b> <?php echo $h8['total']?></b> Female <br> <b> <?php echo $c8['total']?></b> Children <br> <b> <?php echo $a8['total']?></b> Adult <hr> <b> <?php echo $t8['total']?></b> Currently in Treatment <br> <b><?php echo $ok8['total']?></b> Cured'
				},
				{
					"title": 'Granada',
					"lat": '10.6590269',
					"lng": '123.0202097',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Granada <br><?php echo $f9['total']?></b> Patients registered in this area <br> <b><?php echo $g9['total']?></b> Male <br> <b> <?php echo $h9['total']?></b> Female <br> <b> <?php echo $c9['total']?></b> Children <br> <b> <?php echo $a9['total']?></b> Adult <hr> <b> <?php echo $t9['total']?></b> Currently in Treatment <br> <b><?php echo $ok9['total']?></b> Cured'
				},
				{
					"title": 'Handumanan',
					"lat": '10.6040991',
					"lng": '122.9578439',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Handumanan <br><?php echo $f10['total']?></b> Patients registered in this area <br> <b><?php echo $g10['total']?></b> Male <br> <b> <?php echo $h10['total']?></b> Female <br> <b> <?php echo $c10['total']?></b> Children <br> <b> <?php echo $a10['total']?></b> Adult <hr> <b> <?php echo $t10['total']?></b> Currently in Treatment <br> <b><?php echo $ok10['total']?></b> Cured'
				},
				{
					"title": 'Lopez Jaena',
					"lat": '10.6674428',
					"lng": '122.9528982',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Lopez Jaena <br><?php echo $f11['total']?></b> Patients registered in this area <br> <b><?php echo $g11['total']?></b> Male <br> <b> <?php echo $h11['total']?></b> Female <br> <b> <?php echo $c11['total']?></b> Children <br> <b> <?php echo $a11['total']?></b> Adult <hr> <b> <?php echo $t11['total']?></b> Currently in Treatment <br> <b><?php echo $ok11['total']?></b> Cured'
				},
				{
					"title": 'Mabini',
					"lat": '10.6636448',
					"lng": '122.9464508',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Mabini <br><?php echo $f12['total']?></b> Patients registered in this area <br> <b><?php echo $g12['total']?></b> Male <br> <b> <?php echo $h12['total']?></b> Female <br> <b> <?php echo $c12['total']?></b> Children <br> <b> <?php echo $a12['total']?></b> Adult <hr> <b> <?php echo $t12['total']?></b> Currently in Treatment <br> <b><?php echo $ok12['total']?></b> Cured'
				},
				{
					"title": 'Mandalagan',
					"lat": '10.68429',
					"lng": '122.9670321',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Mandalagan </b> <b><br><?php echo $f13['total']?> </b>Patients registered in this area <br> <b><?php echo $g13['total']?></b> Male <br> <b> <?php echo $h13['total']?></b> Female <br> <b> <?php echo $c13['total']?></b> Children <br> <b> <?php echo $a13['total']?></b> Adult <hr> <b> <?php echo $t13['total']?></b> Currently in Treatment <br> <b><?php echo $ok13['total']?></b> Cured'
				},
				{
					"title": 'Mansilingan',
					"lat": '10.6228956',
					"lng": '122.9719083',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Mansilingan <br><?php echo $f14['total']?></b> Patients registered in this area <br> <b><?php echo $g14['total']?></b> Male <br> <b> <?php echo $h14['total']?></b> Female <br> <b> <?php echo $c14['total']?></b> Children <br> <b> <?php echo $a14['total']?></b> Adult <hr> <b> <?php echo $t14['total']?></b> Currently in Treatment <br> <b><?php echo $ok14['total']?></b> Cured'
				},
				{
					"title": 'Montevista',
					"lat": '10.6682798',
					"lng": '122.9690613',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Montevista <br><?php echo $f15['total']?></b> Patients registered in this area <br> <b><?php echo $g15['total']?></b> Male <br> <b> <?php echo $h15['total']?></b> Female <br> <b> <?php echo $c15['total']?></b> Children <br> <b> <?php echo $a15['total']?></b> Adult <hr> <b> <?php echo $t15['total']?></b> Currently in Treatment <br> <b><?php echo $ok15['total']?></b> Cured'
				},
				{
					"title": 'Pahanocoy',
					"lat": '10.6135324',
					"lng": '122.9190981',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Pahanocoy <br><?php echo $f16['total']?></b> Patients registered in this area <br> <b><?php echo $g16['total']?></b> Male <br> <b> <?php echo $h16['total']?></b> Female <br> <b> <?php echo $c16['total']?></b> Children <br> <b> <?php echo $a16['total']?></b> Adult <hr> <b> <?php echo $t16['total']?></b> Currently in Treatment <br> <b><?php echo $ok16['total']?></b> Cured'
				},
				{
					"title": 'Punta Taytay',
					"lat": '10.5978087',
					"lng": '122.9081382',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Punta Taytay <br><?php echo $f17['total']?></b> Patients registered in this area <br> <b><?php echo $g17['total']?></b> Male <br> <b> <?php echo $h17['total']?></b> Female <br> <b> <?php echo $c17['total']?></b> Children <br> <b> <?php echo $a17['total']?></b> Adult <hr> <b> <?php echo $t17['total']?></b> Currently in Treatment <br> <b><?php echo $ok17['total']?></b> Cured'
				},
				{
					"title": 'Singcang',
					"lat": '10.6578418',
					"lng": '122.9344312',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Singcang <br><?php echo $f18['total']?></b> Patients registered in this area <br> <b><?php echo $g18['total']?></b> Male <br> <b> <?php echo $h18['total']?></b> Female <br> <b> <?php echo $c18['total']?></b> Children <br> <b> <?php echo $a18['total']?></b> Adult <hr> <b> <?php echo $t18['total']?></b> Currently in Treatment <br> <b><?php echo $ok18['total']?></b> Cured'
				},
				{
					"title": 'Sum-ag',
					"lat": '10.6018056',
					"lng": '122.9142287',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Sum-ag <br><?php echo $f19['total']?></b> Patients registered in this area <br> <b><?php echo $g19['total']?></b> Male <br> <b> <?php echo $h19['total']?></b> Female <br> <b> <?php echo $c19['total']?></b> Children <br> <b> <?php echo $a19['total']?></b> Adult <hr> <b> <?php echo $t19['total']?></b> Currently in Treatment <br> <b><?php echo $ok19['total']?></b> Cured'
				},
				{
					"title": 'Taculing',
					"lat": '10.6530499',
					"lng": '122.9492107',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Taculing <br><?php echo $f20['total']?></b> Patients registered in this area <br> <b><?php echo $g20['total']?></b> Male <br> <b> <?php echo $h20['total']?></b> Female <br> <b> <?php echo $c20['total']?></b> Children <br> <b> <?php echo $a20['total']?></b> Adult <hr> <b> <?php echo $t20['total']?></b> Currently in Treatment <br> <b><?php echo $ok20['total']?></b> Cured'
				},
				{
					"title": 'Tangub',
					"lat": '10.626458',
					"lng": '122.9209488',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Taculing <br><?php echo $f21['total']?></b> Patients registered in this area <br> <b><?php echo $g21['total']?></b> Male <br> <b> <?php echo $h21['total']?></b> Female <br> <b> <?php echo $c21['total']?></b> Children <br> <b> <?php echo $a21['total']?></b> Adult <hr> <b> <?php echo $t21['total']?></b> Currently in Treatment <br> <b><?php echo $ok21['total']?></b> Cured'
				},
				{
					"title": 'Villamonte',
					"lat": '10.6702611',
					"lng": '122.9519343',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Villamonte <br><?php echo $f23['total']?></b> Patients registered in this area <br> <b><?php echo $g23['total']?></b> Male <br> <b> <?php echo $h23['total']?></b> Female <br> <b> <?php echo $c23['total']?></b> Children <br> <b> <?php echo $a23['total']?></b> Adult <hr> <b> <?php echo $t23['total']?></b> Currently in Treatment <br> <b><?php echo $ok23['total']?></b> Cured'
				},
				{
					"title": 'Vista Alegre',
					"lat": '10.6440823',
					"lng": '122.9743697',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay Vista Alegre <br><?php echo $f24['total']?></b> Patients registered in this area <br> <b><?php echo $g24['total']?></b> Male <br> <b> <?php echo $h24['total']?></b> Female <br> <b> <?php echo $c24['total']?></b> Children <br> <b> <?php echo $a24['total']?></b> Adult <hr> <b> <?php echo $t24['total']?></b> Currently in Treatment <br> <b><?php echo $ok24['total']?></b> Cured'
				},
				{
					"title": 'Barangay 1',
					"lat": '10.6879683',
					"lng": '122.9554583',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 1 <br><?php echo $f26['total']?></b> Patients registered in this area <br> <b><?php echo $g26['total']?></b> Male <br> <b> <?php echo $h26['total']?></b> Female <br> <b> <?php echo $c26['total']?></b> Children <br> <b> <?php echo $a26['total']?></b> Adult <hr> <b> <?php echo $t26['total']?></b> Currently in Treatment <br> <b><?php echo $ok26['total']?></b> Cured'
				},
				{
					"title": 'Barangay 5',
					"lat": '10.6850738',
					"lng": '122.9568754',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 5 <br><?php echo $f30['total']?></b> Patients registered in this area <br> <b><?php echo $g30['total']?></b> Male <br> <b> <?php echo $h30['total']?></b> Female <br> <b> <?php echo $c30['total']?></b> Children <br> <b> <?php echo $a30['total']?></b> Adult <hr> <b> <?php echo $t30['total']?></b> Currently in Treatment <br> <b><?php echo $ok30['total']?></b> Cured'
				},
				{
					"title": 'Barangay 6',
					"lat": '10.677628',
					"lng": '122.9487053',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 6 <br><?php echo $f31['total']?></b> Patients registered in this area <br> <b><?php echo $g31['total']?></b> Male <br> <b> <?php echo $h31['total']?></b> Female <br> <b> <?php echo $c31['total']?></b> Children <br> <b> <?php echo $a31['total']?></b> Adult <hr> <b> <?php echo $t31['total']?></b> Currently in Treatment <br> <b><?php echo $ok31['total']?></b> Cured'
				},
				{
					"title": 'Barangay 7',
					"lat": '10.6766288',
					"lng": '122.9556708',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 7 <br><?php echo $f32['total']?></b> Patients registered in this area <br> <b><?php echo $g32['total']?></b> Male <br> <b> <?php echo $h32['total']?></b> Female <br> <b> <?php echo $c32['total']?></b> Children <br> <b> <?php echo $a32['total']?></b> Adult <hr> <b> <?php echo $t32['total']?></b> Currently in Treatment <br> <b><?php echo $ok32['total']?></b> Cured'
				},
				{
					"title": 'Barangay 8',
					"lat": '10.6433979',
					"lng": '122.967251',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 8 <br><?php echo $f33['total']?></b> Patients registered in this area <br> <b><?php echo $g33['total']?></b> Male <br> <b> <?php echo $h33['total']?></b> Female <br> <b> <?php echo $c33['total']?></b> Children <br> <b> <?php echo $a33['total']?></b> Adult <hr> <b> <?php echo $t33['total']?></b> Currently in Treatment <br> <b><?php echo $ok33['total']?></b> Cured'
				},
				{
					"title": 'Barangay 9',
					"lat": '10.6341675',
					"lng": '122.968708',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 9 <br><?php echo $f34['total']?></b> Patients registered in this area <br> <b><?php echo $g34['total']?></b> Male <br> <b> <?php echo $h34['total']?></b> Female <br> <b> <?php echo $c34['total']?></b> Children <br> <b> <?php echo $a34['total']?></b> Adult <hr> <b> <?php echo $t34['total']?></b> Currently in Treatment <br> <b><?php echo $ok34['total']?></b> Cured'
				},
				{
					"title": 'Barangay 10',
					"lat": '10.6392056',
					"lng": '122.9661085',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 10 <br><?php echo $f35['total']?></b> Patients registered in this area <br> <b><?php echo $g35['total']?></b> Male <br> <b> <?php echo $h35['total']?></b> Female <br> <b> <?php echo $c35['total']?></b> Children <br> <b> <?php echo $a35['total']?></b> Adult <hr> <b> <?php echo $t35['total']?></b> Currently in Treatment <br> <b><?php echo $ok35['total']?></b> Cured'
				},
				{
					"title": 'Barangay 11',
					"lat": '10.6708059',
					"lng": '122.9478242',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 11 <br><?php echo $f36['total']?></b> Patients registered in this area <br> <b><?php echo $g36['total']?></b> Male <br> <b> <?php echo $h36['total']?></b> Female <br> <b> <?php echo $c36['total']?></b> Children <br> <b> <?php echo $a36['total']?></b> Adult <hr> <b> <?php echo $t36['total']?></b> Currently in Treatment <br> <b><?php echo $ok36['total']?></b> Cured'
				},
				{
					"title": 'Barangay 13',
					"lat": '10.6778153',
					"lng": '122.9546882',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 13 <br><?php echo $f38['total']?></b> Patients registered in this area <br> <b><?php echo $g38['total']?></b> Male <br> <b> <?php echo $h38['total']?></b> Female <br> <b> <?php echo $c38['total']?></b> Children <br> <b> <?php echo $a38['total']?></b> Adult <hr> <b> <?php echo $t38['total']?></b> Currently in Treatment <br> <b><?php echo $ok38['total']?></b> Cured'
				},
				{
					"title": 'Barangay 15',
					"lat": '10.6646962',
					"lng": '122.9432293',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 15 <br><?php echo $f40['total']?></b> Patients registered in this area <br> <b><?php echo $g40['total']?></b> Male <br> <b> <?php echo $h40['total']?></b> Female <br> <b> <?php echo $c40['total']?></b> Children <br> <b> <?php echo $a40['total']?></b> Adult <hr> <b> <?php echo $t40['total']?></b> Currently in Treatment <br> <b><?php echo $ok40['total']?></b> Cured'
				},
				{
					"title": 'Barangay 16',
					"lat": '10.6664625',
					"lng": '122.9358755',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 16 <br><?php echo $f41['total']?></b> Patients registered in this area <br> <b><?php echo $g41['total']?></b> Male <br> <b> <?php echo $h41['total']?></b> Female <br> <b> <?php echo $c41['total']?></b> Children <br> <b> <?php echo $a41['total']?></b> Adult <hr> <b> <?php echo $t41['total']?></b> Currently in Treatment <br> <b><?php echo $ok41['total']?></b> Cured'
				},
				{
					"title": 'Barangay 17',
					"lat": '10.6724221',
					"lng": '122.9525161',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 17 <br><?php echo $f42['total']?></b> Patients registered in this area <br> <b><?php echo $g42['total']?></b> Male <br> <b> <?php echo $h42['total']?></b> Female <br> <b> <?php echo $c42['total']?></b> Children <br> <b> <?php echo $a42['total']?></b> Adult <hr> <b> <?php echo $t42['total']?></b> Currently in Treatment <br> <b><?php echo $ok42['total']?></b> Cured'
				},
				{
					"title": 'Barangay 18',
					"lat": '10.6712076',
					"lng": '122.9519572',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 18 <br><?php echo $f43['total']?></b> Patients registered in this area <br> <b><?php echo $g43['total']?></b> Male <br> <b> <?php echo $h43['total']?></b> Female <br> <b> <?php echo $c43['total']?></b> Children <br> <b> <?php echo $a43['total']?></b> Adult <hr> <b> <?php echo $t43['total']?></b> Currently in Treatment <br> <b><?php echo $ok43['total']?></b> Cured'
				},
				{
					"title": 'Barangay 19',
					"lat": '10.6697136',
					"lng": '122.9508303',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 19 <br><?php echo $f44['total']?></b> Patients registered in this area <br> <b><?php echo $g44['total']?></b> Male <br> <b> <?php echo $h44['total']?></b> Female <br> <b> <?php echo $c44['total']?></b> Children <br> <b> <?php echo $a44['total']?></b> Adult <hr> <b> <?php echo $t44['total']?></b> Currently in Treatment <br> <b><?php echo $ok44['total']?></b> Cured'
				},
				{
					"title": 'Barangay 20',
					"lat": '10.668171',
					"lng": '122.9556376',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 20 <br><?php echo $f45['total']?></b> Patients registered in this area <br> <b><?php echo $g45['total']?></b> Male <br> <b> <?php echo $h45['total']?></b> Female <br> <b> <?php echo $c45['total']?></b> Children <br> <b> <?php echo $a45['total']?></b> Adult <hr> <b> <?php echo $t45['total']?></b> Currently in Treatment <br> <b><?php echo $ok45['total']?></b> Cured'
				},
				{
					"title": 'Barangay 21',
					"lat": '10.669674',
					"lng": '122.9470589',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 21 <br><?php echo $f46['total']?></b> Patients registered in this area <br> <b><?php echo $g46['total']?></b> Male <br> <b> <?php echo $h46['total']?></b> Female <br> <b> <?php echo $c46['total']?></b> Children <br> <b> <?php echo $a46['total']?></b> Adult <hr> <b> <?php echo $t46['total']?></b> Currently in Treatment <br> <b><?php echo $ok46['total']?></b> Cured'
				},
				{
					"title": 'Barangay 22',
					"lat": '10.6682171',
					"lng": '122.9502823',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 22 <br><?php echo $f47['total']?></b> Patients registered in this area <br> <b><?php echo $g47['total']?></b> Male <br> <b> <?php echo $h47['total']?></b> Female <br> <b> <?php echo $c47['total']?></b> Children <br> <b> <?php echo $a47['total']?></b> Adult <hr> <b> <?php echo $t47['total']?></b> Currently in Treatment <br> <b><?php echo $ok47['total']?></b> Cured'
				},
				{
					"title": 'Barangay 23',
					"lat": '10.66666',
					"lng": '122.955063',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 23 <br><?php echo $f48['total']?></b> Patients registered in this area <br> <b><?php echo $g48['total']?></b> Male <br> <b> <?php echo $h48['total']?></b> Female <br> <b> <?php echo $c48['total']?></b> Children <br> <b> <?php echo $a48['total']?></b> Adult <hr> <b> <?php echo $t48['total']?></b> Currently in Treatment <br> <b><?php echo $ok48['total']?></b> Cured'
				},
				{
					"title": 'Barangay 24',
					"lat": '10.6673927',
					"lng": '122.9497985',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 24 <br><?php echo $f49['total']?></b> Patients registered in this area <br> <b><?php echo $g49['total']?></b> Male <br> <b> <?php echo $h49['total']?></b> Female <br> <b> <?php echo $c49['total']?></b> Children <br> <b> <?php echo $a49['total']?></b> Adult <hr> <b> <?php echo $t49['total']?></b> Currently in Treatment <br> <b><?php echo $ok49['total']?></b> Cured'
				},
				{
					"title": 'Barangay 25',
					"lat": '10.6662757',
					"lng": '122.9493044',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 25 <br><?php echo $f50['total']?></b> Patients registered in this area <br> <b><?php echo $g50['total']?></b> Male <br> <b> <?php echo $h50['total']?></b> Female <br> <b> <?php echo $c50['total']?></b> Children <br> <b> <?php echo $a50['total']?></b> Adult <hr> <b> <?php echo $t50['total']?></b> Currently in Treatment <br> <b><?php echo $ok50['total']?></b> Cured'
				},
				{
					"title": 'Barangay 26',
					"lat": '10.6654603',
					"lng": '122.9537934',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 26 <br><?php echo $f51['total']?></b> Patients registered in this area <br> <b><?php echo $g51['total']?></b> Male <br> <b> <?php echo $h51['total']?></b> Female <br> <b> <?php echo $c51['total']?></b> Children <br> <b> <?php echo $a51['total']?></b> Adult <hr> <b> <?php echo $t51['total']?></b> Currently in Treatment <br> <b><?php echo $ok51['total']?></b> Cured'
				},
				{
					"title": 'Barangay 27',
					"lat": '10.66496',
					"lng": '122.9577033',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 27 <br><?php echo $f52['total']?></b> Patients registered in this area <br> <b><?php echo $g52['total']?></b> Male <br> <b> <?php echo $h52['total']?></b> Female <br> <b> <?php echo $c52['total']?></b> Children <br> <b> <?php echo $a52['total']?></b> Adult <hr> <b> <?php echo $t52['total']?></b> Currently in Treatment <br> <b><?php echo $ok52['total']?></b> Cured'
				},
				{
					"title": 'Barangay 28',
					"lat": '10.6643896',
					"lng": '122.9530388',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 28 <br><?php echo $f53['total']?></b> Patients registered in this area <br> <b><?php echo $g53['total']?></b> Male <br> <b> <?php echo $h53['total']?></b> Female <br> <b> <?php echo $c53['total']?></b> Children <br> <b> <?php echo $a53['total']?></b> Adult <hr> <b> <?php echo $t53['total']?></b> Currently in Treatment <br> <b><?php echo $ok53['total']?></b> Cured'
				},
				{
					"title": 'Barangay 29',
					"lat": '10.6651901',
					"lng": '122.9489067',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 29 <br><?php echo $f54['total']?></b> Patients registered in this area <br> <b><?php echo $g54['total']?></b> Male <br> <b> <?php echo $h54['total']?></b> Female <br> <b> <?php echo $c54['total']?></b> Children <br> <b> <?php echo $a54['total']?></b> Adult <hr> <b> <?php echo $t54['total']?></b> Currently in Treatment <br> <b><?php echo $ok54['total']?></b> Cured'
				},
				{
					"title": 'Barangay 30',
					"lat": '10.6635588',
					"lng": '122.9501728',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 30 <br><?php echo $f55['total']?></b> Patients registered in this area <br> <b><?php echo $g55['total']?></b> Male <br> <b> <?php echo $h55['total']?></b> Female <br> <b> <?php echo $c55['total']?></b> Children <br> <b> <?php echo $a55['total']?></b> Adult <hr> <b> <?php echo $t55['total']?></b> Currently in Treatment <br> <b><?php echo $ok55['total']?></b> Cured'
				},
				{
					"title": 'Barangay 31',
					"lat": '10.6612492',
					"lng": '122.9526405',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 31 <br><?php echo $f56['total']?></b> Patients registered in this area <br> <b><?php echo $g56['total']?></b> Male <br> <b> <?php echo $h56['total']?></b> Female <br> <b> <?php echo $c56['total']?></b> Children <br> <b> <?php echo $a56['total']?></b> Adult <hr> <b> <?php echo $t56['total']?></b> Currently in Treatment <br> <b><?php echo $ok56['total']?></b> Cured'
				},
				{
					"title": 'Barangay 32',
					"lat": '10.6636222',
					"lng": '122.9471574',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 32 <br><?php echo $f57['total']?></b> Patients registered in this area <br> <b><?php echo $g57['total']?></b> Male <br> <b> <?php echo $h57['total']?></b> Female <br> <b> <?php echo $c57['total']?></b> Children <br> <b> <?php echo $a57['total']?></b> Adult <hr> <b> <?php echo $t57['total']?></b> Currently in Treatment <br> <b><?php echo $ok57['total']?></b> Cured'
				},
				{
					"title": 'Barangay 33',
					"lat": '10.6615876',
					"lng": '122.9491632',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 33 <br><?php echo $f58['total']?></b> Patients registered in this area <br> <b><?php echo $g58['total']?></b> Male <br> <b> <?php echo $h58['total']?></b> Female <br> <b> <?php echo $c58['total']?></b> Children <br> <b> <?php echo $a58['total']?></b> Adult <hr> <b> <?php echo $t58['total']?></b> Currently in Treatment <br> <b><?php echo $ok58['total']?></b> Cured'
				},
				{
					"title": 'Barangay 35',
					"lat": '10.6639043',
					"lng": '122.9369678',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 35 <br><?php echo $f60['total']?></b> Patients registered in this area <br> <b><?php echo $g60['total']?></b> Male <br> <b> <?php echo $h60['total']?></b> Female <br> <b> <?php echo $c60['total']?></b> Children <br> <b> <?php echo $a60['total']?></b> Adult <hr> <b> <?php echo $t60['total']?></b> Currently in Treatment <br> <b><?php echo $ok60['total']?></b> Cured'
				},
				{
					"title": 'Barangay 36',
					"lat": '10.6629783',
					"lng": '122.9388522',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 36 <br><?php echo $f61['total']?></b> Patients registered in this area <br> <b><?php echo $g61['total']?></b> Male <br> <b> <?php echo $h61['total']?></b> Female <br> <b> <?php echo $c61['total']?></b> Children <br> <b> <?php echo $a61['total']?></b> Adult <hr> <b> <?php echo $t61['total']?></b> Currently in Treatment <br> <b><?php echo $ok61['total']?></b> Cured'
				},
				{
					"title": 'Barangay 38',
					"lat": '10.6628312',
					"lng": '122.9444637',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 38 <br><?php echo $f63['total']?></b> Patients registered in this area <br> <b><?php echo $g63['total']?></b> Male <br> <b> <?php echo $h63['total']?></b> Female <br> <b> <?php echo $c63['total']?></b> Children <br> <b> <?php echo $a63['total']?></b> Adult <hr> <b> <?php echo $t63['total']?></b> Currently in Treatment <br> <b><?php echo $ok63['total']?></b> Cured'
				},
				{
					"title": 'Barangay 39',
					"lat": '10.6586901',
					"lng": '122.9409796',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 39 <br><?php echo $f64['total']?></b> Patients registered in this area <br> <b><?php echo $g64['total']?></b> Male <br> <b> <?php echo $h64['total']?></b> Female <br> <b> <?php echo $c64['total']?></b> Children <br> <b> <?php echo $a64['total']?></b> Adult <hr> <b> <?php echo $t64['total']?></b> Currently in Treatment <br> <b><?php echo $ok64['total']?></b> Cured'
				},
				{
					"title": 'Barangay 40',
					"lat": '10.6575982',
					"lng": '122.9450994',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 40 <br><?php echo $f65['total']?></b> Patients registered in this area <br> <b><?php echo $g65['total']?></b> Male <br> <b> <?php echo $h65['total']?></b> Female <br> <b> <?php echo $c65['total']?></b> Children <br> <b> <?php echo $a65['total']?></b> Adult <hr> <b> <?php echo $t65['total']?></b> Currently in Treatment <br> <b><?php echo $ok65['total']?></b> Cured'
				},
				{
					"title": 'Barangay 41',
					"lat": '10.6617878',
					"lng": '122.9446245',
					"description": '<b><span class="fa fa-map-marker"></span> Barangay 41 <br><?php echo $f66['total']?></b> Patients registered in this area <br> <b><?php echo $g66['total']?></b> Male <br> <b> <?php echo $h66['total']?></b> Female <br> <b> <?php echo $c66['total']?></b> Children <br> <b> <?php echo $a66['total']?></b> Adult <hr> <b> <?php echo $t66['total']?></b> Currently in Treatment <br> <b><?php echo $ok66['total']?></b> Cured'
				}

			];
			window.onload = function () {
				LoadMap();
			};

			var map;
			var marker;
			function LoadMap() {
				var mapOptions = {
					center: new google.maps.LatLng(10.640739, 122.968956),
					zoom: 14,
					mapTypeId: google.maps.MapTypeId.HYBRID
				};
				map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
				SetMarker(0);
			};
			function SetMarker(position) {
				//gna kakas ang previous na marker kay masaylo na sa.
				if (marker != null) {
					marker.setMap(null);
				}
				//gna butang ang marker sa mapa.
				var data = markers[position];
				var myLatlng = new google.maps.LatLng(data.lat, data.lng);
				marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: data.title
				});

				//gna open ang popup window kun ma select ang barangay sa dropdown.
				var infoWindow = new google.maps.InfoWindow();
				infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + data.description + "</div>");
				infoWindow.open(map, marker);
			};


		</script>
		<ul class="breadcrumb">
			<li><a href="../home.php">Home</a></li>
			<li class="#">Reports</li>
			<li><a href="../reports.php">TB Cases Report</a></li>
			<li><a href="../reports/reports_barangay_population.php">Barangay Population</a></li>
			<li class="active"><strong><mark>Geo Tagging</mark></strong></li>
		</ul>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>BHTC-PMIS Geo Tagging</strong></h3>
						<div class="btn-group pull-right">
							<div class="pull-left">
								<select onchange="SetMarker(this.value)" class="validate[required] select" data-style="btn-primary" data-live-search="true">
									<option id="rbMarker0" value="0"> Abcasa</option>
									<option id="rbMarker1" value="1"> Alangilan</option>
									<option id="rbMarker2" value="2"> Alijis</option>
									<option id="rbMarker3" value="3"> Banago</option>
									<option id="rbMarker4" value="4"> Bata</option>
									<option id="rbMarker5" value="5"> Cabug</option>
									<option id="rbMarker6" value="6"> Estefania</option>
									<option id="rbMarker7" value="7"> Felisa</option>
									<option id="rbMarker8" value="8"> Granada</option>
									<option id="rbMarker9" value="9"> Handumanan</option>
									<option id="rbMarker10" value="10"> Lopez Jaena</option>
									<option id="rbMarker11" value="11"> Mabini</option>
									<option id="rbMarker12" value="12"> Mandalagan</option>
									<option id="rbMarker13" value="13"> Mansilingan</option>
									<option id="rbMarker14" value="14"> Montevista</option>
									<option id="rbMarker15" value="15"> Pahanocoy</option>
									<option id="rbMarker16" value="16"> Punta Taytay</option>
									<option id="rbMarker17" value="17"> Singcang</option>
									<option id="rbMarker18" value="18"> Sum-ag</option>
									<option id="rbMarker19" value="19"> Taculing</option>
									<option id="rbMarker20" value="20"> Tangub</option>
									<option id="rbMarker21" value="21"> Villamonte</option>
									<option id="rbMarker22" value="22"> Vista Alegre</option>
									<option id="rbMarker23" value="23"> Brgy. 1</option>
									<option id="rbMarker24" value="24"> Brgy. 5</option>
									<option id="rbMarker25" value="25"> Brgy. 6</option>
									<option id="rbMarker26" value="26"> Brgy. 7</option>
									<option id="rbMarker27" value="27"> Brgy. 8</option>
									<option id="rbMarker28" value="28"> Brgy. 9</option>
									<option id="rbMarker29" value="29"> Brgy. 10</option>
									<option id="rbMarker30" value="30"> Brgy. 11</option>
									<option id="rbMarker31" value="31"> Brgy. 13</option>
									<option id="rbMarker32" value="32"> Brgy. 15</option>
									<option id="rbMarker33" value="33"> Brgy. 16</option>
									<option id="rbMarker34" value="34"> Brgy. 17</option>
									<option id="rbMarker35" value="35"> Brgy. 18</option>
									<option id="rbMarker36" value="36"> Brgy. 19</option>
									<option id="rbMarker37" value="37"> Brgy. 20</option>
									<option id="rbMarker38" value="38"> Brgy. 21</option>
									<option id="rbMarker39" value="39"> Brgy. 22</option>
									<option id="rbMarker40" value="40"> Brgy. 23</option>
									<option id="rbMarker41" value="41"> Brgy. 24</option>
									<option id="rbMarker42" value="42"> Brgy. 25</option>
									<option id="rbMarker43" value="43"> Brgy. 26</option>
									<option id="rbMarker44" value="44"> Brgy. 27</option>
									<option id="rbMarker45" value="45"> Brgy. 28</option>
									<option id="rbMarker46" value="46"> Brgy. 29</option>
									<option id="rbMarker47" value="47"> Brgy. 30</option>
									<option id="rbMarker48" value="48"> Brgy. 31</option>
									<option id="rbMarker49" value="49"> Brgy. 32</option>
									<option id="rbMarker50" value="50"> Brgy. 33</option>
									<option id="rbMarker51" value="51"> Brgy. 35</option>
									<option id="rbMarker52" value="52"> Brgy. 36</option>
									<option id="rbMarker53" value="53"> Brgy. 38</option>
									<option id="rbMarker54" value="54"> Brgy. 39</option>
									<option id="rbMarker55" value="55"> Brgy. 40</option>
									<option id="rbMarker56" value="56"> Brgy. 41</option>
								</select>
							</div>
						</div>
						<div class="panel-body">
							<div id="dvMap" style="width: 100%; height: 100%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type='text/javascript' src='../js/plugins/bootstrap/bootstrap-select.js'></script>
		<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
		<script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
		<script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="../js/plugins.js"></script>
		<script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../js/actions.js"></script>
	</body>
</html>