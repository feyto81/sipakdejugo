@foreach($category as $res)
<tr>
  <td>{{$loop->iteration}}</td>
  <td>{{$res->nama_kategori}}</td>
  <td>{{$res->slug}}</td>
  <td>
  	<a href="#" id="{{$res->id}}" class="btn btn-warning btn-sm edit" title="Edit Category"><i class="fa fa-pencil"></i></a>
  	<a href="#" id="{{$res->id}}" class="btn btn-danger btn-sm delete" title="Hapus Category"><i class="fa fa-trash"></i></a>
  </td>
</tr>
@endforeach