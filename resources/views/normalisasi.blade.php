@extends('layouts.app')

@section('content')
<div class="row ">
    <div class="col-lg-12 mx-auto">
        <div class="row">
            <div class="col-md-offset-2 col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-3 col-xs-12">
                                <h4 class="title">Data <span>List</span></h4>
                            </div>
                            <div class="col-sm-12 col-xs-12 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alternatif</th>
                                    <th>deskripsi</th>
                                    <th>Harga</th>
                                    <th>Kualitas</th>
                                    <th>Berat</th>
                                    <th>populer</th>
                                    <th>Rasa</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as  $result)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $result['nama_alt'] }}</td>
                                    <td>{{ $result['deskripsi'] }}</td>
                                    <td>{{ $result['harga'] }}</td>
                                    <td>{{ $result['kualitas'] }}</td>
                                    <td>{{ $result['berat'] }}</td>
                                    <td>{{ $result['popoler'] }}</td>
                                    <td>{{ $result['pj'] }}</td>


                                    {{-- <td>
                                        @csrf
                                        <ul class="action-list">
                                            <li><a href="/kreteria/{{$name_column->id}}/edit" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                            <form action="/kreteria/{{$name_column->id}}/delete" method="post">
                                                @method('delete')
                                            <li><a href="/kreteria/{{$name_column->id}}/delete" data-tip="delete"><i class="fa fa-trash"></i></a></li>
                                        </form>
                                        </ul>
                                    </td> --}}
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.8 -->
@endsection
