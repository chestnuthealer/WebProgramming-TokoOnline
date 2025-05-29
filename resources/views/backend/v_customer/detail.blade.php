@extends('backend.v_layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title" style="font-size: 22px;">{{ $judul }}</h4>
                        <div class="row">
                            <!-- Foto -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto</label><br>
                                    @if ($edit->user->foto)
                                        <img src="{{ asset('storage/img-customer/' . $edit->user->foto) }}"
                                            class="foto-preview" width="100%">
                                    @else
                                        <img src="{{ asset('image/img-default.jpg') }}" class="foto-preview" width="100%">
                                    @endif
                                </div>
                            </div>

                            <!-- Data Detail -->
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Hak Akses</label>
                                    <p class="form-control-plaintext pl-2" style="background-color: #f4f4f4;">
                                        @switch($edit->user->role)
                                            @case(0)
                                                Admin
                                            @break

                                            @case(1)
                                                Super Admin
                                            @break

                                            @case(2)
                                                Customer
                                            @break

                                            @default
                                                Tidak diketahui
                                        @endswitch
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <p class="form-control-plaintext pl-2" style="background-color: #f4f4f4;">
                                        {{ $edit->user->status == 1 ? 'Aktif' : 'Tidak Aktif' }}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <p class="form-control-plaintext pl-2" style="background-color: #f4f4f4;">
                                        {{ $edit->user->nama }}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <p class="form-control-plaintext pl-2" style="background-color: #f4f4f4;">
                                        {{ $edit->user->email }}
                                    </p>
                                </div>

                                <div class="form-group">
                                    <label>HP</label>
                                    <p class="form-control-plaintext pl-2" style="background-color: #f4f4f4;">
                                        {{ $edit->user->hp }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <a href="{{ route('backend.customer.index') }}">
                                <button type="button" class="btn btn-secondary">Kembali</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
