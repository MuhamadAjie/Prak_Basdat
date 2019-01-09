@extends('base')

@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Barang</h1>
            <hr>
            <form action="{{ route('kontak.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama Barang:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Jumlah Barang:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="nohp">Harga Barang:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp">
                </div>
                <div class="form-group">
                    <label for="alamat">Asal Barang:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <a class="btn btn-md btn-danger" href="/home_pg">Show Table</a>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection