@extends('layouts.main')
@section('content')
<div class="col-lg-12">
    @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        {{ $errors->all()[0] }}
    </div>
    @endif
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah pertunjukan</h3>
        </div>
        <div class="card-body">
            <form action="{{$form_action}}" method="{{$form_method}}">
                @csrf
                <div class="row">
                    <div class="col-md-12 form-group mb-3">
                        <label>Nama Pertunjukan</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label>Kategori</label>
                        <select class="form-control custom-select" name="category_id" id="category_id" required>
                            <?php foreach ($category as $c): ?>
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <label>Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" required>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_selesai" id="tanggal_selesai" required>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <label>Waktu Mulai</label>
                        <input type="time" class="form-control" name="waktu_mulai" id="waktu_mulai" required>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <label>Waktu Selesai</label>
                        <input type="time" class="form-control" name="waktu_selesai" id="waktu_selesai" required>
                    </div>
                    <!-- <div class="col-md-3 form-group mb-3">
                        <label>Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="longitude" required>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <label>Lattitude</label>
                        <input type="text" class="form-control" name="lattitude" id="lattitude" required>
                    </div> -->
                    <div class="col-md-12 form-group mb-3">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <label>Lokasi</label>
                        <input type="text" class="form-control" name="location" id="location" required placeholder="e.g. Panggung Treasureland">
                    </div>
                    <div class="col-md-8 form-group mb-3">
                        <label>Unggah Gambar</label>
                        <input type="file" class="form-control" name="file" id="file" required>
                    </div>
                    <div class="col-md-3 form-group mb-3">
                        <span id="preview-img"><img src="#" alt="img" width="100%"></span>
                    </div>
                    <div class="col-md-12 form-group mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
            <!-- <div class="stats">
        <div class="card-footer">
                <i class="material-icons text-danger">info</i>
            </div> -->
        </div>
    </div>
</div>
@endsection