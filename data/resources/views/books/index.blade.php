@extends('getData')

@section('content.nav')
<ul class="nav nav-tabs">
                    <li>
                      <a href="{{ url('/home') }}">Surat</a>
                    </li>
                    <li class="active">
                      <a href="{{ url('/getData') }}">Data</a>
                    </li>
                  </ul>
                  <br>
@stop

@section('content.getData')

<div class="col-xs-12"><a href="{{ url('getData/employees/create') }}" title="Tambah" class="btn btn-default btn-fill">Tambah Pegawai</a>
  <div class="form-group" style="float:right">
  {!! Form::open(['url'=>'getData/search', 'class'=>'form-group']) !!}  
    
    <div class="col-xs-9">{!! Form::text('kata_kunci',null,['class'=>'form-control','placeholder'=>'Keywords']) !!}</div>
<!--    <button class="btn btn-round glyphicon glyphicon-search" type="submit"></button>-->
    <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
  {!! Form::close() !!}
  </div>
</div>





<div>
    @if ($employeList->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Unit Kerja</th>
                </tr>
            </thead>

            <tbody>
                <?php $i=0; ?>
                @foreach ($employeList as $book)
                    <?php $i++; ?>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->nip }}</td>
                    <td>{{ $book->nama }}</td>
                    <td>{{ $book->unit_kerja }}</td>
       
                    

                    

                    <td><a class="btn btn-primary" data-placement="bottom" title="Lihat Data" data-toggle="modal" data-id ="book->id" data-target="#modalshow<?php echo $book->id;?>" href="#"><span class="glyphicon glyphicon-user"></a></td>

                    <div class="modal fade" id="modalshow<?php echo $book->id;?>" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Detil Pegawai</b></h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $book->id;?>" name="id">
                                    <div class="panel panel-group">
                                        <div class="panel-body">
                                            <div class="row col-md-10 col-md-offset-1">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" title="Kembali" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-warning btn-simple" title="Hapus" href="{{ url('getData/employees/'.$book->id.'/edit')}}">Ganti</a>
                                </div>
                            </div>
                        </div>
                    </div>                    


                    <td><a class="btn btn-warning" data-placement="bottom" title="Edit Data" href="{{ url('getData/employees/'.$book->id.'/edit')}}"><span class="glyphicon glyphicon-pencil"></a></td>
                    <td><a class="btn btn-danger" data-placement="bottom" title="Hapus Data" data-toggle="modal" href="#" data-target="#modaldelete"><span class="glyphicon glyphicon-trash"></a></td>

                    <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><b>Perhatian</b></h4>
                                </div>
                                
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $book->id;?>" name="id">
                                    <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Kembali</button>
                                    <div class="divider"></div>
                                    <a class="btn btn-danger btn-simple" title="Hapus" href="{{ action('HomeController@delete', $book->id) }}">Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <center>
        {!!$employeList->render()!!}
     </center>
    @else
        There are no book in the book list
    @endif
  
</div>
@stop