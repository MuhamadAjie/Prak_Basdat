@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Kontak</h1>
            <hr>
            @foreach($dataa as $datas)
            <form action="{{ route('call.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama Barang:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="email">Jumlah Barang:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                    <label for="nohp">Harga Barang:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $datas->nohp }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Asal Barang:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $datas->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a class="btn btn-md btn-danger" href="{{URL::previous()}}">Cancel</a>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection