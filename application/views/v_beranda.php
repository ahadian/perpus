 
 
 
 <div class="span8">
		
		<h3>Home</h3>
		<div class="span12" style="margin-left: 0px">
		<legend style="margin-bottom: 10px; font-size: 15px; font-weight: bold">Welcome to <?php echo $instansi->nama?></legend>
		<div class="row-fluid">
		<h5>Please enter the data of your visit, before going to the library. thanks ... </h5>
        <form action="<?php echo base_URL()?>beranda/post_pengunjung" method="post" class="form-inline">
		<?php echo $this->session->flashdata("k")?>
		<div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
        <input type="text" class="span5" name="nama" placeholder="Nama" required/>
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label">Gender</label>
        <div class="controls">
        <select name="jk" required class="span4">
        <option value="">[Pilih Jenis Kelamin]</option>
        <option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>
		</select>
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label">Utilities</label>
        <div class="controls">
        <input type="checkbox" name="perlu2" value="Pinjam Buku"/> Pinjam Buku
        <input type="checkbox" name="perlu3" value="Kembalikan Buku"/> Kembalikan Buku
		<input type="checkbox" name="perlu4" value="Baca Buku"/> Baca Buku
		<input type="checkbox" name="perlu5" value="Lainnya"/> Lainnya
        </div>
        </div>
        
        <div class="control-group">
        <label class="control-label">Feedback</label>
        <div class="controls">
        <textarea class="span8" type="text" name="saran" placeholder="Please enter your criticism suggestions" rows="5"></textarea>
        </div>
        </div>
		
        <button type="submit" name="submit" class="btn btn-blue">Simpan</button>
        		
		</div>
		</div>        

</div>