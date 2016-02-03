<table>
 <tbody>
  <tr>
                    <th>Id</th>
                    <th>NIP</th>
               		<th>No Karpeg</th>
                    <th>Nama</th>
                   	<th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>TMT CPNS</th>
                    <th>TMT PNS</th>
                    <th>TMT Pangkat Terakhir</th>
                    <th>Pangkat</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Instansi</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Pendidikan Tahun Lulus</th>
                    <th>Pendidikan Univ</th>
                    <th>Pendidikan Tempat</th>
                    <th>Pendidikan Jurusan</th>
                    <th>Status</th>  

  </tr>
  @foreach($users as $user)
  <tr>
  	<td>{{$user['id']}}</td>
  	<td>{{$user['nip']}}</td>
   <td>{{$user['no_karpeg']}}</td>
     <td>{{$user['nama']}}</td>
     <td>{{$user['jenis_kelamin']}}</td>
     <td>{{$user['agama']}}</td>
     <td>{{$user['tempat_lahir']}}</td>
     <td>{{substr($user['tanggal_lahir'],0,11)}}</td>
     <td>{{substr($user['tmt_cpns'],0,11)}}</td>
     <td>{{substr($user['tmt_pns'],0,11)}}</td>
     <td>{{substr($user['tmt_pangkat_terakhir'],0,11)}}</td>
     <td>{{$user['pangkat']}}</td>
     <td>{{$user['golongan']}}</td>
     <td>{{$user['jabatan']}}</td>
     <td>{{$user['unit_kerja']}}</td>
     <td>{{$user['instansi']}}</td>
     <td>{{$user['pendidikan_terakhir']}}</td>
     <td>{{$user['pendidikan_tahun_lulus']}}</td>
     <td>{{$user['pendidikan_univ']}}</td>
	 <td>{{$user['pendidikan_tempat']}}</td>
     <td>{{$user['pendidikan_jurusan']}}</td>
     <td>{{$user['status']}}</td>

  </tr>
  @endforeach
 </tbody>
</table>