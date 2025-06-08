@extends('layouts.app')

@section('title', 'Laravel - CRUD | J-GOD')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Producto</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lista</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Registro de Productos</h5>
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-label waves-effect waves-light rounded-pill"><i class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i> Nuevo producto</a>
                </div>
                <div class="card-body">
                    <table id="productsTable" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm btn-label waves-effect waves-light rounded-pill"><i class="ri-eye-2-line label-icon align-middle rounded-pill fs-16 me-2"></i>Mostrar</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm btn-label waves-effect waves-light rounded-pill"><i class="ri-edit-box-line label-icon align-middle rounded-pill fs-16 me-2"></i>Editar</a>
                                        <button type="submit" class="btn btn-danger btn-sm btn-label waves-effect waves-light rounded-pill" onclick="confirmDeletion({{ $product->id }})"><i class="ri-delete-bin-line label-icon align-middle rounded-pill fs-16 me-2"></i>Eliminar</button>
                                        <form id="delete-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                        </form>                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end col-->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#productsTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                }
            });
        });
    </script>
    @if(session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    },
                }).showToast();
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
                style: {
                    background: "linear-gradient(to right, #e53935, #e35d5b)",
                },
            }).showToast();
        </script>
    @endif

    <script>
        function confirmDeletion(productId) {
            Swal.fire({
                title: "Está seguro de Eliminar el Producto?",
                text: "¡No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, Eliminar!",
                cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + productId).submit();
                    }
            });
        }
    </script>
@endpush