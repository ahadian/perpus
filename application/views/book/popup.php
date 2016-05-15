<script type="text/javascript" charset="utf-8">
	$(function() {
		popup_table = $('#popup').dataTable({
			"bJQueryUI": true,
			"sPaginationType": "full_numbers"
		});
	});
</script>
<div class="main-content">
<div class="container-fluid padded">

<div class="box">

	
	<div class="box-content padded">
		<div class="tab-content">
        	<div class="tab-pane box active">
				<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive" id="popup">
                	<thead>
                		<tr>
                    		<th><div>No</div></th>
                    		<th><div>ISBN</div></th>
                            <th><div>Title</div></th>
                            <th><div>Author</div></th>
                            <th><div>Publisher</div></th>
                    		<th><div>&nbsp;</div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php
						
						//if($book_data) {
                            $book_data = $this->book_model->getAllBook();
                            $i = 1;
            				foreach ($book_data as $row)
            				{
            					echo '<tr>';
            					echo '<td>'.$i.'</td>';
                                echo '<td>'.$row->isbn.'</td>';
            					echo '<td>'.$row->title.'</td>';
                                echo '<td>'.$row->authorname.'</td>';
            					echo '<td>'.$row->publishername.'</td>';
            					echo '<td>'.form_hidden('id'.$i, $row->id).form_radio('chkID', $i).'</td>';
            					echo '</tr>';
            					$i++;
            				}
                        //}?>
                    </tbody>
                </table>
			</div>
        </div>
	</div>
</div></div></div>