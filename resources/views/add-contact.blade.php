@extends('layouts.app')
@section('content')
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Contact</h4>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
        <div class="col-3">
          <div class="text-center mb-n5">
            <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="widget-content searchable-container list">
    <!-- --------------------- start Contact ---------------- -->
    <div class="container-fluid px-5">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="text-white">Add Contact</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('proses.addContact') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="noTelp">NoTelp</label>
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <span class="p-2 bg-light-primary rounded text-primary">+62</span>
                            <input class="form-control" type="telp" name="notelp">
                        </div>
                    </div>
                    @error('notelp')
                        <div class="bg-light-danger p-2 py-3">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                    @enderror
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
