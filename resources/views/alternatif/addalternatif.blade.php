@extends('layouts.app');

@section('content')
<div class="row ">
    <div class="col-lg-6 mx-auto">
        <div class="card-body bg-light">
            <div class="container">
                <form action="/alternatif/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="controls">
                        <div class="form-group">
                            <label for="nama">Alternatif *</label>
                            <input id="nama" type="text" name="nama" class="form-control"
                                placeholder="Please enter Name alternatif"  required="required"
                                >
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi *</label>
                            <input id="deskripsi" type="text" name="deskripsi" class="form-control"
                                placeholder="Please enter deskripsi alternatif" required="required"
                                >
                        </div>
                        <div class="form-group">
                            <label for="image">Image *</label>
                            <input id="image" type="file" name="image" class="form-control"
                                placeholder="Please enter image alternatif"
                                >
                        </div>
                        <div class="form-group">
                            <label for="lokasi">lokasi *</label>
                            <input id="lokasi" type="text" name="lokasi" class="form-control"
                                placeholder="Please enter lokasi alternatif" required="required"
                                >
                                <div class="form-group">
                                    <label for="harga">Harga *</label>
                                    <input id="harga" type="text" name="harga" class="form-control"
                                        placeholder="Please enter harga alternatif" required="required"
                                        >
                        </div>
                        <div class="form-group">
                            <label for="kualitas">kualitas *</label>
                            <input id="kualitas" type="text" name="kualitas" class="form-control"
                                placeholder="Please enter kualitas alternatif" required="required"
                                >
                        </div><div class="form-group">
                            <label for="berat">Berat *</label>
                            <input id="berat" type="text" name="berat" class="form-control"
                                placeholder="Please enter berat alternatif" required="required"
                                >
                        </div>
                        <div class="form-group">
                            <label for="populer">populer *</label>
                            <input id="populer" type="text" name="populer" class="form-control"
                                placeholder="Please enter populer alternatif" required="required"
                                >
                        </div> <div class="form-group">
                            <label for="pj">RASA *</label>
                            <input id="pj" type="text" name="pj" class="form-control"
                                placeholder="Please enter pj alternatif" required="required"
                                >
                        </div>

                    <div class="col-md-12">

                        <button type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="save" name="submit">
                            tambah data
                        </button>
                    </div>

            </div>
            </form>
            </div>
        </div>


    </div>
    <!-- /.8 -->
@endsection
