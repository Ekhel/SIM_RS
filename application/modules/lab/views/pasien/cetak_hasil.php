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

</style>

<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li></ul></div>
<div id="container">
	<div class="title">
		<table width="100%">
      <tr>
        <td colspan='2' align='center'>
          <img height="60px" width="50px" src="<?php echo base_url()?>assets/img/logo/biak.png" />
        </td>
      </tr>
			<tr><td colspan='2' align='center'><text class="lg-text">PEMERINTAH KABUPATEN BIAK</text></td></tr>
      <tr><td colspan='2' align='center'><text class="lg-text">POLIKLINIK RSUD BIAK</text></td></tr>
      <tr><td colspan='2' align='center'><text class="italic-text">Alamat : Jalan Raya fff – ddd Tlp. (0967) 594710 Biak</text></td></tr>
	  </table>
    <hr/>
    <table width="100%">
      <tr><td colspan='2' align='center'>DETAIL HASIL PEMERIKSAAN LABORATORIUM</td></tr>
    </table>
  </div>
	</br>
  <?php foreach($periksa as $item){ ?>
    <div>
      <table width="50%" align="left" class="normal-text">
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $item->nama_pasien ?></td>
        </tr>
        <tr>
          <td>Jekel</td>
          <td>:</td>
          <td><?php echo $item->jenis_kelamin ?></td>
        </tr>
        <tr>
          <td>Gol Darah</td>
          <td>:</td>
          <td><?php echo $item->golongan_darah ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $item->alamat ?></td>
        </tr>
        <tr>
          <td>Kontak</td>
          <td>:</td>
          <td><?php echo $item->no_kontak ?></td>
        </tr>
      </table>
      <table width="50%" align="right" class="normal-text">

        <tr>
          <td>KODE LAB</td>
          <td>:</td>
          <td><?php echo $item->kode_pemeriksaan ?></td>
        </tr>
        <tr>
          <td>Tanggal Periksa</td>
          <td>:</td>
          <td><?php echo $item->tanggal_periksa ?> </td>
        </tr>
      </table>
    </div>
  </br>

<?php } ?>
    </br>

    <table width="100%" class="table normal-text" border="1px">
      <thead>
        <tr>
          <th>NO</th>
          <th>item</th>
          <th>Hasil</th>
          <th>Satuan</th>
          <th>Nilai Rujukan</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach($hasil as $result){?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $result->nama_jenis ?></td>
            <td><?php echo $result->hasil ?></td>
            <td><?php echo $result->satuan ?></td>
            <td><?php echo $result->nilai_rujukan ?></td>
            <td><?php echo $result->hasil_ket ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</div>
