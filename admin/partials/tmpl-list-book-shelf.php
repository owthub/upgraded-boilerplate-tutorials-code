<div class="row" style="margin-top:20px;">
	<div class="col-sm-12">
		<div class="panel panel-primary">
		  <div class="panel-heading">List Book Shelf</div>
		  <div class="panel-body">
		  	<table id="tbl-list-book-shelf" class="display" style="width:100%">
        <thead> 
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Capacity</th>
                <th>Location</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 

            if(count($book_shelf) > 0){

                foreach($book_shelf as $index => $data){
                    ?>
                    <tr>
                        <td><?php echo $data->id ?></td>
                        <td><?php echo strtoupper($data->shelf_name) ?></td>
                        <td><?php echo intval($data->capacity) ?></td>
                        <td><?php echo strtoupper($data->shelf_location) ?></td>
                        <td>
                            <?php 
                            if($data->status){
                                ?>
                                <button class="btn btn-success">Active</button>
                                <?php
                            }else{
                                 ?>
                                <button class="btn btn-danger">Inactive</button>
                                <?php
                            }
                            ?>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-delete-book-shelf" data-id="<?php echo $data->id ?>">Delete</button>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Capacity</th>
                <th>Location</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
		  </div>
		</div>
	</div>
</div>