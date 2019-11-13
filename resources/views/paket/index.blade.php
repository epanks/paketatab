@extends('layouts.master')

@section('content')
<div class="content">
    <center>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-group">
                <select name="filter_kdoutput" id="filter_kdoutput" class="form-control" required>
                    <option value="">Select Kode Output</option>
                    @foreach ($data as $output)
                        <option value="{{$output->kdoutput}}">{{$output->nmoutput}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" align="center">
                <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
                <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
            </div>
        </div>
    </div>
</center>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Paket</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-success">
                            Add New
                            <i class="fas fa-user-plus fa-fw"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Nama Satker</th>
                                <th>Pagu</th>
                                <th>Keuangan</th>
                                <th>Progres Keuangan</th>
                                <th>Rencana Fisik</th>
                                <th>Modify</th>

                            </tr>

                        @foreach ($data as $no => $balai)

                            <tr>
                                <td>{{++$no}}</td>
                                <td><a href="/paket/{{$balai->id}}">{{$balai->nmpaket}}</td>
                                <td class="text-right">{{number_format($balai->pagurmp)}}</td>
                                <td class="text-right">{{number_format($balai->keuangan)}}</td>
                                <td class="text-right">{{number_format($balai->progres_keu)}}</td>
                                <td class="text-right">{{number_format(($balai->progres_fisik),2)}}</td>
                                <td>
                                    <a href="/paket/{{$balai->id}}/edit">
                                        <i class="fa fa-edit blue"></i>
                                    </a>
                                    /
                                    <a href="/paket/{{$balai->id}}/delete">
                                        <i class="fa fa-trash red" onclick="return confirm('Yakin data mau dihapus')"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    {{-- {{$wilayahall->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $(function() {
            fill_datatable();
            function fill_datatable(filter_kdoutput = '')

            $('#filter').click(function(){
                var filter_kdoutput = $('#filter_kdoutput').val();
                if(filter_kdoutput != '' && filter_kdoutput != '')
                {
                    $('#paket-table').DataTable().destroy();
                    fill_datatable(filter_kdoutput);
                }
                else
                {
                    alert('Select Both');
                }
            });
            $('#reset').click(function(){
                $('#filter_kdoutput').val('');
                $('#paket-table').DataTable().destroy();
                fill_datatable();
            });
          });
        </script>

@endsection
