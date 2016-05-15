
<div class="main-content">
<div class="container-fluid padded">
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				Add Book
                </a></li>
        </ul>
</div>
<div class="box-content padded">
		<div class="tab-content">
                <div class="box-content" id="list">
                    <form name="form1" method="post" action="<?= base_url() ?>index.php/book/addBookDb" class="form-horizontal" enctype="multipart/form-data">
                        <div class="control-group">
                                <label class="control-label">Category</label>
                                <div class="controls">
                                    <select name="id_jenis"  class="span3">
                                    <option value="">[Choose Category]</option>
                                    <?
                                    $listCategory = $this->book_model->getCategory();
                                    foreach ($listCategory->result() as $row){?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->nama?></option>
                                    <? } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">ISBN</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="isbn"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Title</label>
                                <div class="controls">
                                    <input type="text" class="span4" name="judul"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Author</label>
                                <div class="controls">
                                    <select name="pengarang"  class="span3">
                                    <option value="">[Choose Author]</option>
                                    <?
                                    $listAuthor = $this->book_model->getAuthor();
                                    foreach ($listAuthor->result() as $row){?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
                                    <? } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Publisher</label>
                                <div class="controls">
                                    <select name="penerbit" class="span3">
                                    <option value="">[Choose Publisher]</option>
                                    <?
                                    $listPublisher = $this->book_model->getPublisher();
                                    foreach ($listPublisher->result() as $row){?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->name?></option>
                                    <? } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Publish Year</label>
                                <div class="controls">
                                    <input type="text" class="span2" name="th_terbit"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price</label>
                                <div class="controls">
                                    <input type="text" class="span3" name="harga"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Location</label>
                                <div class="controls">
                                    <select name="id_lokasi"  class="span3">
                                    <option value="">[Choose Location]</option>
                                    <?
                                    $listLocation = $this->book_model->getLocation();
                                    foreach ($listLocation->result() as $row){?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->nama?></option>
                                    <? } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Book Condition</label>
                                <div class="controls">
                                    <select name="stat"  class="span3">
                                    <option value="">[Choose Condition]</option>
                                    <?
                                    $listCondition = $this->book_model->getKondisi();
                                    foreach ($listCondition->result() as $row){?>
                                    <option value="<?php echo $row->id?>"><?php echo $row->nama?></option>
                                    <? } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea class="ckeditor" name="deskripsi" rows="5" style="width: 800px; height: 350px;"></textarea>
                                </div>
                            </div>
                        <div class="form-actions">
                            <button type="submit" name="submit" class="btn btn-blue">Simpan</button>
                            <button type="button" onclick="self.history.back()" class="btn btn-default">Cancel</button>
                        </div>
                   </form>                
                </div>                
			</div>

</div></div></div></div></div>
<script>
$(function() {
$("#publish_date").datepicker({        
		 dateFormat: "yy-mm-dd",
         forceParse: false
    });
});

</script>