@extends('layouts.main')
@section('content')
<div class="col-lg-12">
    @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        {{ $errors->all()[0] }}
    </div>
    @endif
    @if (Session::get('alert'))
    <div class="alert alert-{{Session::get('alert')['class']}} alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ Session::get('alert')['message'] }}</strong>
    </div>
    @endif
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-outline-primary" href="{{URL::to('/portal/pertunjukan/create')}}" style="float: right;">Tambah Pertunjukan</a>
            <h3 class="card-title">List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover datatables">
                    <thead>
                        <th>Nama</th>
                        <th>Info</th>
                        <th>Gambar</th>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $row): ?>
                            <td>
                                <b><?php echo $row->name ?></b>
                                <p>
                                    <?php 
                                    $length = 128;
                                    echo substr($row->description,$length);
                                    echo strlen($row->description) > $length ? "..." : '';
                                    ?>
                                </p> 
                            </td>
                            <td>
                                <p><?php echo $row->label_time ?></p>
                                <p><?php echo $row->label_location ?></p>
                            </td>
                            <td>
                                <img src="#" alt="image-preview">
                            </td>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <!-- <div class="stats">
                <i class="material-icons text-danger">info</i>
            </div> -->
        </div>
    </div>
</div>
@endsection