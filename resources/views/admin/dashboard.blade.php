@extends('admin.master')
@section('content')
<table class="table table-dark" id="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Khách hàng</th>
      <th scope="col">Phone</th>
      <th scope="col">Sản phẩm</th>
      <th scope="col">Thời gian tạo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($warranties as $warranty)
    <tr>
      <th scope="row">{{$loop->index +1 }}</th>
      <td>{{ $warranty->name }}</td>
      <td>{{ $warranty->phone }}</td>
      <td>{{ $warranty->product }}</td>
      <td>{{ $warranty->start }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection