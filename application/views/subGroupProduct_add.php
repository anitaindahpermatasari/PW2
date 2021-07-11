<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">

		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Sub Group Produk</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
							Sub Group Produk
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							Hasil untuk "Sub Group Produk"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!-- PAGE CONTENT BEGINS -->
					<div class="modal-body">
						<form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('subGroupProduct/add'); ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="txtKode" id="txtKode" value="">
							<div class="form-group">
								<label class="col-sm-2 control-label no-padding-right"> Kelompok Produk </label>	
								<div class="col-sm-3">
									<select name="cmbGroup" id="cmbGroup" class="form-control" required data-parsley-error-message="Field ini harus diisi">
										<option value=""></option>
										<?php
										foreach ($data as $row) { 
											echo "<option value='$row->GroupProduct_Auto' $cek>$row->GroupProduct_Name</option>";
										}
										?>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-7 control-label no-padding-right">
									<button class="btn btn-white btn-info btn-bold" id="btnSimpan" name="btnSimpan" type="submit"><i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Simpan</button>
									<a href="" target="_self" class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</a>
								</label>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>
