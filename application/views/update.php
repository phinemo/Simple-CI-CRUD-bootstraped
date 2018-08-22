<div class="col-md-4 col-xs-12">
    <form action="<?php echo base_url('index.php/c_orang/edit')?>" method="post">
    <?php
    foreach($orang as $org){
     echo '
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="id">ID (Auto generated)</label>
				<input type="text" class="form-control" id="id" value="'.$org->id.'" readonly name="id">
			</div>
			<div class="form-group col-md-6">
				<label for="inputName">Name</label>
				<input type="text" class="form-control" id="inputName" placeholder="Input Name" name="nama" value="'.$org->nama.'">
			</div>
		</div>
		<div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="Input Address" name="alamat" value="'.$org->alamat.'">
		</div>
		<div class="form-group">
			<label for="inputTelephone">Mobile Number</label>
			<input type="text" class="form-control" id="inputTelephone" placeholder="+62xx-xxxx-xxxx" name="telepon" value="'.$org->telepon.'">
        </div>
        ';}?>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>

</div>
</div>
</div>
