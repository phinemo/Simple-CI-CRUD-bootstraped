<div class="col-lg-4 col-md-12 col-xs-12">
    <form action="<?php echo base_url('index.php/c_orang/insert')?>" method="post">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="id">ID (Auto generated)</label>
				<input type="text" class="form-control" id="id" value="<?php $i = 1; echo 'A'.$i++ ?>" readonly name="id">
			</div>
			<div class="form-group col-md-6">
				<label for="inputName">Name</label>
				<input type="text" class="form-control" id="inputName" placeholder="Input Name" name="nama">
			</div>
		</div>
		<div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="Input Address" name="alamat">
		</div>
		<div class="form-group">
			<label for="inputTelephone">Mobile Number</label>
			<input type="text" class="form-control" id="inputTelephone" placeholder="+62xx-xxxx-xxxx" name="telepon">
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>

</div>
</div>
</div>
