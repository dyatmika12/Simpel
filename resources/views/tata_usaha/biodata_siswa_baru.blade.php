@extends('layout.layout_TU')
@section('title','Biodata Siswa Baru')

@section('content')
   <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="/tu/validate-siswa-baru" class="btn btn-md btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-sm-6 col-md-9 my-2 font-color-grey text-right">
                <h3 class="display-6 mr-5 ">Verifikasi Siswa Baru</h3>
            </div>
        </div>
        <div class="row my-5 p-3 bg-white mr-5">
            <div class="col-12">
                <div class="mb-3 text-center">  
                    <span class="number"> 1 </span> 
                    <span style="font-size:18px;">Data Siswa</span> 
                </div>
            </div>
            <div class="col-sm-12 col-md-2 text-center">
                <a href="/storage/profile_siswa/{{$siswa->pict}}" target="_blank">
                    <img src="/storage/profile_siswa/{{$siswa->pict}}"   class="rounded" alt="logo_simple"  width="125px" height="150px">
                </a>
            </div>
            <div class="col-sm-12 col-md-10">
                <div class="row">
                    <div class="col-sm-12 col-md-6 border">
                        <h6 class="mt-3 font-color-grey">Nama</h6>
                        <h5 class=" mb-3">{{$siswa->nama}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">Nis</h6>
                        <h5 class=" mb-3">{{$siswa->nis}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">No Telepon</h6>
                        <h5 class=" mb-3">{{$siswa->no_tlp}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">Agama</h6>
                        <h5 class=" mb-3">{{$siswa->agama->agama}}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8 border">
                        <h6 class="mt-3 font-color-grey">Alamat</h6>
                        <h5 class=" mb-3">{{$siswa->alamat}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">tanggal lahir</h6>
                        <h5 class=" mb-3">{{$siswa->tgl_lahir}}</h5>
                    </div>
                    <div class="col-sm-12 col-md-2 border">
                        <h6 class="mt-3 font-color-grey">jenis kelamin</h6>
                        <h5 class=" mb-3">{{$siswa->jenis_kelamin}}</h5>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($siswa->wali as $wali)
            <div class="row my-5 p-3 bg-white mr-5">
                <div class="col-12">
                    <div class="mb-3 text-center">  
                        <span class="number"> {{$loop->iteration + 1}} </span> 
                        <span style="font-size:18px;">Data Wali</span> 
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 border">
                            <h6 class="mt-3 font-color-grey">Nama</h6>
                            <h5 class=" mb-3">{{$wali->nama}}</h5>
                        </div>
                        <div class="col-sm-12 col-md-3 border">
                            <h6 class="mt-3 font-color-grey">No Telepon</h6>
                            <h5 class=" mb-3">{{$wali->no_tlp}}</h5>
                        </div>
                        <div class="col-sm-12 col-md-3 border">
                            <h6 class="mt-3 font-color-grey">Agama</h6>
                            <h5 class=" mb-3">{{$wali->agama->agama}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 border">
                            <h6 class="mt-3 font-color-grey">Alamat</h6>
                            <h5 class=" mb-3">{{$wali->alamat}}</h5>
                        </div>
                        <div class="col-sm-12 col-md-2 border">
                            <h6 class="mt-3 font-color-grey">tanggal lahir</h6>
                            <h5 class=" mb-3">{{$wali->tgl_lahir}}</h5>
                        </div>
                        <div class="col-sm-12 col-md-2 border">
                            <h6 class="mt-3 font-color-grey">jenis kelamin</h6>
                            <h5 class=" mb-3">{{$wali->jenis_kelamin}}</h5>
                        </div>
                    </div>
                </div>
            </div>   
        @endforeach

        <div class="row my-5 p-3 bg-white mr-5">
            <div class="col-12">
                <div class="mb-3 text-center">  
                    <span class="number"> 3 </span> 
                    <span style="font-size:18px;">Data Berkas</span> 
                </div>
            </div>
            <div class="col-12">
                <div class="row ">
                    @foreach ($siswa->berkas as $berkas)
                        <div class="col-sm-12 col-md-4 text-center p-3 border">
                            <a href="/storage/berkas/{{$berkas->path}}" target="_blank">
                                <img src="/storage/berkas/{{$berkas->path}}"   class="rounded" alt="logo_simple"  width="100%" height="100%">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>  
        </div>
        <div class="row my-5">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-lg btn-primary">Verify</a>
            </div>
        </div>
        
   </div>
@endsection