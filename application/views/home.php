<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h4>Data Orang</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th scope="col">No ID</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>
						<th scope="col">Telepon</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($orang as $org){
                       echo '<tr>
                       <th scope="row">'.$org->id.'</th>
                       <td>'.$org->nama.'</td>
                       <td>'.$org->alamat.'</td>
                       <td>'.$org->telepon.'</td>
                       <td>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    '.anchor('c_orang/pre_edit/'.$org->id,'<button class="btn btn-danger"><i class="fa fa-edit"></i></button>').'
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    '.anchor('c_orang/delete/'.$org->id,'<button class="btn btn-warning"><i class="fa fa-trash"></i></button>').'
                                </div>
                            </div>
                        </td>
                   </tr>'; 
                    }?>

				</tbody>
			</table>
		</div>
