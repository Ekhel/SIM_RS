<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.battatech.excelexport.min.js"></script>
<title><?php echo $title ?></title>
<script type="text/javascript">
	  $(document).ready(function() {
	    $("#cetak").click(function(event) {
	      event.preventDefault();
	      window.print();
	    });
	    $("#export_excel").click(function(event) {
	      event.preventDefault();
	      $("#container").btechco_excelexport({
	        containerid: "container",
	        datatype: $datatype.Table
	      });
	    });
			window.onload = function() { window.print(); }
	  });
</script>
<style type="text/css">
	body {
		margin: 0px;
		padding: 0px;
	}
	.title {
		text-align: center;
		font-family: Verdana;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.table {
		border-collapse: collapse;
	}
	.table thead {
		font-size: 11px;
		font-weight: bold;
	}
	.table .header td{
		background-color: #C1C1C1;
		text-align: center;
	}
	.table thead td {
		background-color: #EEEEEE;
	}
	.prog {
		background-color: #dddddd;
	}
	.table tr {
		border-collapse: collapse;
	}
	.table td{
		font-size: 12px;
		padding: 5px;
		border-collapse: collapse;
		border: thin solid black;
	}
	.gray {
		background-color: gray;
	}
	.green {
		background-color: green;
	}
	@media print
	{
		.no-print, .no-print *
		{
		    display: none !important;
		}
		body {
    background: none;
    -ms-zoom: 1.665;
  	}
	  div.portrait, div.landscape {
	    margin: 0;
	    padding: 0;
	    border: none;
	    background: none;
	  }
	  div.landscape {
	    transform: rotate(270deg) translate(-276mm, 0);
	    transform-origin: 0 0;
	  }
	}
	.box_export {
	    top: 0px;
	    right: 0px;
	    padding: 10px 0px 10px 0px;
	    background: gray;
	    height: 20px;
	    margin: 0px;
	    margin-bottom: 10px;
	  }
	  .box_export ul {
	    margin: 0px;
	    padding: 0px;
	  }
	  .box_export li {
	    display: inline;
	  }
	  .box_export li a {
	    color: white;
	    text-decoration: none;
	    padding: 0px 10px 0px 10px;
	  }
	  .box_export li a:hover {
	    background-color: green;
	  }
    .lg-text {
      font-size: 14px;
      padding: 5px;
      font-weight: bold;
    }
    .italic-text {
      font-size: 11px;
      font-style: italic;
      padding: 5px;
    }
    .normal-text {
      font-family: Verdana;
      font-size: 12px;
      font-style: normal;
      padding: 5px;
    }
		.small-text {
      font-family: Verdana;
      font-size: 10px;
      font-style: bold;
      padding: 2px;
			align: center;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
		.box_ticket {
			width:200px;
			height: 170px;
			border-style:dashed;
			border-color:black;
			border-width:3px;
			text-align: center;
			padding: 2px;
		}
		.box_size{
			width: 200px;
	    height: 170px;
	    float: left;
	    margin: 20px;
		}

</style>

<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li></ul></div>
<div id="container">
	<div class="title">
		<h4>e - Ticket Obat</h4>
	</div>
  <div>
    <?php foreach($eticket as $item){?>
    	<div class="box_size">
				<div class="box_ticket">
					<text class="small-text"><strong>PEMERINTAH KABUPATEN BIAK</strong></text>
					<br/>
					<text class="small-text"><strong>Poliklinik RSUD Biak</strong></text>
					<hr/>
					<table>
						<tr>
							<td class="small-text">Tanggal</td>
							<td class="small-text">:</td>
							<td class="small-text"><?php echo date('Y-m-d') ?></td>
						</tr>
						<tr>
							<td class="small-text">No</td>
							<td class="small-text">:</td>
							<td class="small-text"></td>
						</tr>
						<tr>
							<td class="small-text">Nama</td>
							<td class="small-text">:</td>
							<td class="small-text"></td>
						</tr>
						<tr>
							<td class="small-text"><strong><?php echo $item->eticket ?></strong></td>
						</tr>
						<tr>
							<td class="small-text">Sebelum</td>
							<td> / </td>
							<td class="small-text">Sesudah Makan</td>
						</tr>
					</table>
				</div>
    	</div>
  <?php } ?>
  </div>
</div>
