<div class="main-content">
<div class="container-fluid padded">

<?
$instansi	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
$data['maks_hari']	= $instansi->maks_hari;

?>
<div class="box">
<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Add Rent
                </a></li>
        </ul>
</div>
<div id="dialog-form"></div>

<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content">
                    <form name="form2" onsubmit="return cek()" method="post" action="<?= base_url() ?>rent/addrentitemDb" class="form-horizontal">
                    <input type="hidden" name="jml_buku" value="<?php echo $jml_buku?>"/>
                        <div class="padded" >
                            <div class="control-group" >
                                <label class="control-label">Member ID</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="id_anggota" value="<?php echo $det_anggota->id?>"required readonly/>
                                    &nbsp;<input class="span4" type="text" name="nama" value="<?php echo $det_anggota->nama?>" readonly>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Rent Date</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="tgl_pinjam" value="<?php echo date('Y-m-d')?>"readonly/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Due Date</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="tgl_kembali" value="<?php echo adddate($data['maks_hari'])?>"readonly/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea class="span6" name="ket" rows="4"></textarea>
                                </div>
                            </div>
                            <h3>Entry Book Item</h3>
                            
                            <?php 
                        	for ($i = 1; $i <= $jml_buku; $i++) {
                        	?>
                        	<div class="control-group">
                                <label class="control-label">Book -<?php echo $i?></label>
                                <div class="controls">
                                    <input class="span1" type="text" name="id_buku_<?php echo $i?>" id="id_buku_<?php echo $i?>" placeholder="Book ID" required readonly> &nbsp;
                                	<input class="span6" type="text" name="judul_buku_<?php echo $i?>" placeholder="Book Title" id="judul_buku_<?php echo $i?>" readonly> &nbsp; 
                                	<a href="#" class="btn btn-info col-lg-2" onclick="return show_modal(<?php echo $i; ?>);">Search</a>
                                </div>
                            </div>
                            <?php 
                        	}
                        	?>
                            
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue">Submit</button>
                        </div>
                   </form>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="display: none">
        		<div class="modal-dialog">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<h4 class="modal-title" id="myModalLabel">Search Book Title</h4>
        				</div>
        				
        				<div class="modal-body">
        					<form method="post" action="" id="cari_kode">
        						<input type="hidden" name="id_baris" id="id_baris">
        						<input type="text" name="kata_kunci" id="kata_kunci" class="form-control col-lg-10" required>&nbsp;&nbsp;
        						<input type="submit" value="Search" class="btn btn-success">
        					</form>	
        					<br/>
        					<div id="hasil_cari"></div>
        				</div>
        				
        				<div class="modal-footer">
        					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				</div>
        			</div>
        		</div>
	</div>                
                </div>                
			</div></div>

</div></div></div></div></div>
<script type="text/javascript">
		function isikan_kode(id_baris, id, judul) {
			$("#id_buku_"+id_baris).val(id);
			$("#judul_buku_"+id_baris).val(judul);
			$('#myModal').modal('hide');
			return false;
		}
		
		function show_modal(id) {
			$("#id_baris").val(id);
			$('#myModal').modal('show');
			$("#hasil_cari").html("");
			return false;
		}
		
		$("#cari_kode").submit(function(event) {
			event.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>rent/search_kode",
				data: $("#cari_kode").serialize(),
				success: function(response) {
					$("#hasil_cari").html(response);
				}
			});
        });
		

	function cek() {
		<?php 
		for ($i = 1; $i <= $jml_buku; $i++) {
		?>
		var x_<?php echo $i?> = document.forms["form2"]["id_buku_<?php echo $i?>"].value;
		<?php 
		}
		?>
		
		<?php 
		for ($j = 1; $j <= $jml_buku; $j++) {
		?>
		
		if ( x_<?php echo $j?> == "") {
		  alert("Pilihlah buku isian buku ke - <?php echo $j?>");
		  openbuku(<?php echo $j?>)
		  return false;
		} 
		<?php 
		}

		for ($k = 1; $k < $jml_buku; $k++) {
		?>
		
		if ( x_<?php echo $k+1?> == x_<?php echo $k?>) {
		  alert("Pilihan buku ke - <?php echo $k+1?> tidak boleh sama dengan sebelumnya");
		  return false;
		} 
		<?php 
		}
		?> 
		
	}


		</script>


