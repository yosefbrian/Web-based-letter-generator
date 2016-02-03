@extends('getData')

@section('content.getData')
<h3>Detail Pegawai</h3>
<hr/>
<div class="panel panel-group">
    <div class="panel-body">
        <div class="row col-md-10">
            <div class="row">
                <div class="form-group">
                    <label class="col-sm-6"><div class="pull-right">&nbsp;</div></label>
                    <div class="col-sm-6"></div>
                </div>
            </div>
            
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                NIP : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->nip}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Nomor Kartu Pegawai : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->no_karpeg}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Nama : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->nama}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Jenis Kelamin : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->jenis_kelamin}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Agama : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->agama}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Tempat Lahir : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->tempat_lahir}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Tanggal Lahir :
                            </div>
                        </label>
                        <div class="col-sm-6">{{substr($book->tanggal_lahir,0,11)}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                TMT CPNS :
                            </div>
                        </label>
                        <div class="col-sm-6">{{substr($book->tmt_cpns,0,11)}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                TMT PNS : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{substr($book->tmt_pns,0,11)}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                TMT Pangkat Terakhir : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ substr($book->tmt_pangkat_terakhir,0,11)}}</div>
                    </div>
                </div>
        <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Pangkat : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->pangkat}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Golongan : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->golongan}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Jabatan : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->jabatan}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Unit Kerja : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->unit_kerja}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Instansi : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->Instansi}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Jenjang Pendidikan Terakhir :
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->pendidikan_terakhir}}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Tahun Lulus : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->pendidikan_tahun_lulus}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Nama Instansi Pendidikan : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->pendidikan_univ}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Lokasi Intansi Pendidikan : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->pendidikan_tempat}}</div>
                    </div>
                </div>
       
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Jurusan : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->pendidikan_jurusan}}</div>
                    </div>
                </div>
       <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Status : 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->status}}</div>
                    </div>
                </div>

                    
       
       
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                            
                            </div>
                        </label>
                    
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="form-group col-xs-12">  
  <a class="btn btn-primary btn-simple" onclick="goBack()">Kembali</a>
  <div style="float:right">
  <a class="btn btn-warning btn-simple" href="{{ url('getData/employees/'.$book->id.'/edit')}}">Perbarui</a>
  <a class="btn btn-danger btn-simple" href="{{ action('HomeController@delete', $book->id) }}">Hapus</a>
  </div>
</div>


@stop

@section('body.script')
<script>
function goBack() {
    window.history.back();
}
</script>
@show