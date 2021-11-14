@extends('layouts.app')

@section('header')
Permintaan Perubahan Nomenklatur(Pending)
@endsection

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></div>
    <div class="breadcrumb-item">Permintaan Perubahan Nomenklatur(Pending)</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">

        <br>
        <div class="card">
            <div class="card-header">
                <h4>Data Perubahan Nomenklatur(Pending)</h4>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                 <th>#</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Detail</th>
                                <th>Aksi</th>
                            </tr>

                            @if(!$nomenklatur->isEmpty())
                            @foreach($nomenklatur as $key => $data)
                            <tr>
                                <td>{{$key + $nomenklatur->firstItem()}}</td>

                                <td>{{$data->nama_sekolah}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>
                                    @if($data->status == 'Pending')
                                    <span class="dot-warning"></span> {{$data->status}}
                                    @elseif($data->status == 'Disetujui')
                                    <span class="dot-success"></span> {{$data->status}}
                                    @else
                                    <span class="dot-danger"></span> {{$data->status}}
                                    @endif
                                </td>
                                <td>
                                <button id="viewprosesnomenklatur" class="btn btn-sm btn-info" href="#modalviewprosesnomenklatur" data-toggle="modal" style="text-decoration:none;"
                                        data-target="#modalviewprosesnomenklatur"
                                        data-nama="{{$data->nama_sekolah}}" data-alamat="{{$data->alamat}}"
                                        data-status="{{$data->status}}" data-nomenkalturbaru="{{$data->nomenklatur_baru}}"
                                        data-spns="{{$data->surat_perubahan_nama_sekolah}}" data-si="{{$data->surat_ijin_operasional}}"
                                        data-skk="{{$data->sk_kemenkumham}}" data-spc="{{$data->surat_pengantar_cabang_dinas}}"
                                        data-sps="{{$data->surat_permohonan_sekolah}}" data-keterangan="{{$data->keterangan}}"
                                        >Lihat Data</button>
                                <td>
                                    <a class="btn btn-sm btn-success btn-block" id="diteruskan"
                                        href="proses/teruskan/{{$data->id}}"><i class="fas fa-check"></i> Teruskan</a>
                                    <button class="btn btn-sm btn-danger btn-block" id="tolakpermintaan" data-toggle="modal" data-target="#modalketerangan" data-idsek="{{$data->id}}" ><i class="fas fa-times"></i> Tolak</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <th colspan="6" class="text-center"><i>Data Permintaan Perubahan Nomenklatur Saat Ini Kosong</i>
                                </th>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>

            {{$nomenklatur->links()}}
        </div>
    </div>
</div>

<!-- Modal Detail Permintaan -->
<div class="modal fade" id="modalviewprosesnomenklatur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Permintaan Perubahan Nomenklatur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Nama Sekolah</th>
                            <th>:</th>
                            <td id="nama-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <td id="alamat-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Nomenklatur Baru</th>
                            <th>:</th>
                            <td id="nomenklatur-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Surat Perubahan Nama Sekolah</th>
                            <th>:</th>
                            <td><a id="spnslink" href="" target="_blank">Surat Perubahan Nama Sekolah</a></td>
                        </tr>
                        <tr>
                            <th>Surat Ijin Operasional Sekolah</th>
                            <th>:</th>
                            <td><a id="silink" href="" target="_blank">Surat Ijin Operasional Sekolah</a></td>
                        </tr>
                        <tr>
                            <th>Surat Keterangan KEMENKUMHAM</th>
                            <th>:</th>
                            <td><a id="skklink" href="" target="_blank">Surat Keterangan KEMENKUMHAM</a></td>
                        </tr>
                        <tr>
                            <th>Surat Pengantar Cabang Dinas</th>
                            <th>:</th>
                            <td><a id="spclink" href="" target="_blank">Surat Pengantar Cabang Dinas</a></td>
                        </tr>
                        <tr>
                            <th>Surat Permohanan Sekolah</th>
                            <th>:</th>
                            <td><a id="spslink" href="" target="_blank">Surat Permohanan Sekolah</a></td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <th>:</th>
                            <td id="status-sekolah"></td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <th>:</th>
                            <td id="keterangan-sekolah"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Keterangan Tolak Permintaan -->
<div class="modal fade" id="modalketerangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('tolaknomenklatur')}}" method="POST">
                    @csrf
                    <input type="hidden" id="id-sekolah" name="id">
                    <div class="form-group">
                        <label>Keterangan Permintaan Ditolak(*)</label>
                        <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                        @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" >Keluar</button>
                <input type="submit" class="btn btn-danger" value="Tolak">
            </div>
            </form>
        </div>
    </div>
</div>



@endsection
