@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Producto</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Vista</a></li>
                        <li class="breadcrumb-item active">Producto</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Información de Producto</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
                        <!-- Name -->
                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ __('Nombre') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre de Producto" value="{{ $product->name }}" required readonly>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Price -->
                        <div class="col-md-6">
                            <label for="price" class="form-label">{{ __('Precio') }}</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Precio" value="{{ $product->price }}" required readonly>
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Description -->
                        <div class="col-md-12">
                            <label for="description" class="form-label">{{ __('Descripción') }}</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required readonly>{{ $product->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xxl-12 col-md-6">
                            <a href="{{ route('products.index') }}" class="btn btn-danger btn-label waves-effect waves-light rounded-pill">
                                <i class=" ri-close-line label-icon align-middle rounded-pill fs-16 me-2"></i>{{ __('Atrás') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script></script>
@endpush