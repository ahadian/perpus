<? $session_data = $this->session->userdata('logged_in'); ?>
<div class="main-content">
<div class="container-fluid padded">
<? 
$urladdress = $this->uri->segment(3);
$nama_anggota	= getNama($urladdress); ?>
<h2><?php echo $title;?> of <?php echo $nama_anggota?></h2>
<?php echo $this->session->flashdata("k");?>

<br /><br />
<div class="box">

<div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
        	<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
				List Rent Detail
                </a></li>
        </ul>
</div>	
	<div class="box-content padded">
		<div class="tab-content">
        	<div class="tab-pane box active" id="list">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div>No</div></th>
                            <th><div>Title</div></th>
                            <th><div>Rent Date</div></th>
                            <th><div>Due Date</div></th>
                            <th><div>Description</div></th>
                            <th><div>Control</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						$i = 1;
						$instansi	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
                        $data['denda']	= $instansi->denda;
                        
                        $list = $this->db->query("SELECT trans.*, DATEDIFF(NOW(), trans.tgl_kembali) AS terlambat, buku.judul
												FROM trans 
												LEFT JOIN buku ON trans.id_buku = buku.id
												WHERE trans.id_anggota = '$urladdress' AND trans.stat = '2'")->result();
                        
                        foreach ($list as $row) {
					    ?>
                        <tr>
                            <td style="text-align: center; width: 5%;"><?php echo $i++;?></td>
							<td><?php echo $row->judul;?></td>
                            <td><?php echo tgl_indo($row->tgl_pinjam);?></td>
                            <td><?php echo tgl_indo($row->tgl_kembali);?></td>
                            <td><?php 
                			if ($row->terlambat > 0) {
                				echo "<span style='color: red; font-weight: bold'>Overdue ".$row->terlambat." days<br>Fine : ".($row->terlambat * $data['denda'])."</span>";
                				$telat1 = $row->terlambat;
                				$denda1 = $row->terlambat * $data['denda'];
                			} else {
                				echo "-";
                				$telat1 = 0;
                				$denda1 = 0;
                			}
                			?></td>
                            <td style="text-align: center; width: 10%;">
                            <a href="<?php echo base_url();?>rent/refund/<?php echo $row->id_anggota;?>/<?php echo $row->id_buku?>/<?php echo $row->id?>/<?php echo $telat1?>/<?php echo $denda1?>"
                                	rel="tooltip" data-placement="top" data-original-title="Refund" class="btn btn-red">
                                		<i class="icon-off"></i>
                            </a>
                            <a href="<?php echo base_url();?>rent/renew/<?php echo $row->id;?>/<?php echo $row->id_anggota?>"
                                	rel="tooltip" data-placement="top" data-original-title="Renew" class="btn btn-blue">
                                		<i class="icon-repeat"></i>
                            </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div><br />
            <button type="button" onclick="self.history.back()" class="btn btn-gold">Back</button>
        </div>
	</div>
</div></div></div>