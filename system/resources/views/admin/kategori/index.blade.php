@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						FILTER
					</div>
					<div class="card-body">
						<form action="{{url('admin/kategori/filter')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
							</div>
							<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						DATA KATEGORI
						<a href="{{url('admin/kategori/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Nama Kategori</th>
							</thead>
							<tbody>
								@foreach($list_kategori as $kategori)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<!-- delete -->
											@include('admin.template.utils.delete', ['url' => url('admin/kategori', $kategori->id)])
											<!-- delete -->								
										</div>
									</td>
									<td>{{$kategori->nama}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>				
			</div>
		</div>
	</div>
@endsection