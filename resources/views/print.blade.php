<!DOCTYPE html>
<html>
<head>
<style>
/* This style sets the width of all images to 100%: */

@page{
  margin: 1em 1em;
}

.test {
  height:190px;
  width:45%;
}

.test2 {
  height:190px;
  width:45%;
}


.company-header-avatar{
  position: absolute;
  margin-left:197px;
  margin-top:14px;
  z-index: -1;
    width: 100px;
    height: 100px;
    -webkit-border-radius: 50px;
    -webkit-background-clip: padding-box;
    -moz-border-radius: 50px;
    -moz-background-clip: padding;
    border-radius: 50px;
    background-clip: padding-box;
    margin-right: px;
    float: left;
    background-size: cover;
    background-position: center center;
    z-index: 100;
}

.front{

position: absolute;
height:195px;
  z-index: -100;
}

td, th {
  /* border: 1px solid #dddddd; */
  text-align: left;
}

table {
  border-spacing: 10px;
}

.alamat {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:10px;
  position: absolute;
  margin-left:150px;
  margin-top:160px;
  z-index: 99;
}

.alamat2 {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:9px;
  position: absolute;
  margin-left:150px;
  margin-top:175px;
  z-index: 99;
}

.agama {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:10px;
  position: absolute;
  margin-left:150px;
  margin-top:130px;
  z-index: 99;
}

.agama2 {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:9px;
  position: absolute;
  margin-left:150px;
  margin-top:145px;
  z-index: 99;
}


.nisn {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:10px;
  position: absolute;
  margin-left:80px;
  margin-top:160px;
  z-index: 99;
}

.nisn2 {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:9px;
  position: absolute;
  margin-left:80px;
  margin-top:175px;
  z-index: 99;
}

.jenis {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:10px;
  position: absolute;
  margin-left:80px;
  margin-top:130px;
  z-index: 99;
}

.jenis2 {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:9px;
  position: absolute;
  margin-left:80px;
  margin-top:145px;
  z-index: 99;
}

.tempat2 {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:10px;
  position: absolute;
  margin-left:5px;
  margin-top:145px;
  z-index: 99;
}

.tempat {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:11px;
  position: absolute;
  margin-left:5px;
  margin-top:130px;
  z-index: 99;
}

.tanggal {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:11px;
  position: absolute;
  margin-left:5px;
  margin-top: 160px;
  z-index: 99;
}

.tanggal2 {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:11px;
  position: absolute;
  margin-left:5px;
  margin-top: 175px;
  z-index: 99;
}

.nama {
  font-family: Arial, Helvetica, sans-serif;
  color:#006599;
  font-size:12px;
  font-weight: bold;
  position: absolute;
  margin-left:60px;
  margin-top:75px;
  z-index: 99;
}

.jurusan {
  font-family: Arial, Helvetica, sans-serif;
  /* color:#006599; */
  font-size:16px;
  font-weight: bold;
  position: absolute;
  margin-left:60px;
  margin-top:95px;
  z-index: 99;
}

.logo-jurusan {
  width:40px;
  position: absolute;
  margin-left:10px;
  margin-top:80px;
  z-index: 99;
}

.ttd {
  width:80px;
  position: absolute;
  margin-left:210px;
  margin-top:120px;
  z-index: 99;
}

.page-break {
    page-break-after: always;
}

.awal {
    font-size: 8px;
}
</style>
</head>
<body>

<!-- <img src="{{public_path('card/back.png')}}" alt="logo"/> -->

@foreach($data as $index => $user)

  @if (!file_exists(public_path('patan/').$user->nisn.'.png') || !file_exists(public_path('patan/').$user->nisn.'.jpg') )
  <table style="width:100%;">
    <tr>
      <td class="test">
        <!-- <div class="company-header-avatar" style="background-image: url({{public_path('patan/avatar.png')}})"></div> -->
            <!-- <img class="company-header-avatar"  src="{{ asset('patan/'.$user->nisn.'.png') }}"> -->
        <!-- <img class="company-header-avatar" src="{{ public_path('patan/').$user->nisn.'.png' }}" alt="cek"> -->
        <!-- <img class="company-header-avatar"  src="{{ public_path('patan/avatar.png') }}"> -->
        <img class="front"  src="{{ public_path('card/jadi.png') }}">
        @if (file_exists(public_path('patan/').$user->nisn.'.jpg') )
          <img class="company-header-avatar"  src="{{ public_path('patan/').$user->nisn.'.jpg' }}">
        @else
          <img class="company-header-avatar"  src="{{ public_path('patan/').$user->nisn.'.png' }}">
        @endif
        <img class="company-header-avatar"  src="{{ public_path('patan/').$user->nisn.'.png' }}">
        <img class="logo-jurusan" src="{{public_path('card/').$user->komptensi_keahlian.'.png'}}" alt="cek">
        <!-- <img class="logo-jurusan" src="{{public_path('card/mm.png').$user->komptensi_keahlian.'.png'}}" alt="cek"> -->
        <img class="ttd" src="{{public_path('card/ttd.png')}}" alt="cek">

        <div class="tempat">Tempat Lahir</div>
        <div class="tempat2">{{  ucwords(strtolower($user->tempat)) }}</div>
        <div class="tanggal">Tanggal Lahir</div>
        <div class="tanggal2">{{ $user->tanggal }}</div>
        <div class="jenis">Jenis Kelamin</div>
        <div class="jenis2">{{$user->jenis_kelamin}}</div>
        <div class="nisn">NISN</div>
        <div class="nisn2"> {{$user->nisn}}</div>
        <div class="agama">Agama</div>
        <div class="agama2">{{$user->agama}}</div>
        <div class="alamat">Alamat</div>
        <div class="alamat2">
            @if($user->alamat != "")
              @foreach(explode(" ",$user->alamat) as $index => $ids)
                @if($index < 2)
                    {{ ucwords(strtolower($ids))}}
                @endif
              @endforeach
            @endif
        </div>
        <div class="nama">
        @if($user->name != "")
              @foreach(explode(" ",$user->name) as $index => $ids)
                @if($index < 2)
                    {{ ucwords(strtolower($ids))}}
                @endif
              @endforeach
            @endif
        </div>
        <div class="jurusan">{{$user->komptensi_keahlian}}</div>
      </td>

      <td>
      </td>
      <td class="test2">
      <img class="front"  src="{{ public_path('card/back.png') }}">
      </td>
    </tr>
  </table>


    {{ $no++}}
  @if($no % 4 == 0 && $no != 0 )


  @endif


  @else

  @endif



@endforeach



<!-- <img width="45%" src="{{public_path('card/back.png')}}" alt="logo"/> -->


</body>
</html>
