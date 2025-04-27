@extends('layouts.simple.master')

@section('title', 'Komponen Gaji')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
    <script>
        function generateInputForm($containerId, $type) {
            const container = document.createElement('div');
            container.className =
                'list-group-item list-group-item-action d-flex justify-content-between align-items-center';

            const infoDiv = document.createElement('div');

            const nameInput = document.createElement('input');
            nameInput.type = 'text';
            nameInput.className = 'form-control mb-1';
            nameInput.name = 'name[]';
            nameInput.placeholder = 'Nama Komponen';
            nameInput.required = true;
            infoDiv.appendChild(nameInput);

            const amountInput = document.createElement('input');
            amountInput.type = 'number';
            amountInput.className = 'form-control mb-1';
            amountInput.name = 'amount[]';
            amountInput.placeholder = 'Jumlah';
            amountInput.required = true;
            infoDiv.appendChild(amountInput);

            const typeSelect = document.createElement('select');
            typeSelect.className = 'form-select';
            typeSelect.name = 'type[]';
            typeSelect.required = true;

            let options = [];
            if ($type == 'plus') {
                options = ['basic', 'allowance', 'bonus'];
            } else {
                options = ['deduction', 'tax'];
            }
            options.forEach(option => {
                const optionElement = document.createElement('option');
                optionElement.value = option;
                optionElement.textContent = option.charAt(0).toUpperCase() + option.slice(1);
                typeSelect.appendChild(optionElement);
            });

            infoDiv.appendChild(typeSelect);

            container.appendChild(infoDiv);

            const actionDiv = document.createElement('div');
            actionDiv.className = 'd-flex gap-2';

            const deleteBtn = document.createElement('button');
            deleteBtn.type = 'button';
            deleteBtn.className = 'btn btn-danger btn-sm';
            deleteBtn.innerHTML = '<i class="fa-solid fa-trash"></i>';
            deleteBtn.onclick = function() {
                container.remove();
            };
            actionDiv.appendChild(deleteBtn);

            container.appendChild(actionDiv);

            document.getElementById($containerId).appendChild(container);
        }

        function deleteComponent(component) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Komponen gaji ini akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    component.parentElement.parentElement.remove();
                }
            })
        }


        function formatRupiah(amount) {
            return 'Rp ' + amount.toLocaleString('id-ID');
        }

        function calculateTotalAmount() {
            const plusTotalAmount = document.getElementById('plusTotalAmount');
            const plusContainer = document.getElementById('plusContainer');
            const plusAmounts = plusContainer.querySelectorAll('input[name="amount[]"]');
            const totalAmount = Array.from(plusAmounts).reduce((sum, amount) => sum + parseFloat(amount.value), 0);
            plusTotalAmount.textContent = 'Total: ' + formatRupiah(totalAmount);
        }

        function calculateMinusTotalAmount() {
            const minusTotalAmount = document.getElementById('minusTotalAmount');
            const minusContainer = document.getElementById('minusContainer');
            const minusAmounts = minusContainer.querySelectorAll('input[name="amount[]"]');
            const totalAmount = Array.from(minusAmounts).reduce((sum, amount) => sum + parseFloat(amount.value), 0);
            minusTotalAmount.textContent = 'Total: ' + formatRupiah(totalAmount);
        }

        // Menambahkan event listener di input field amount
        const amountInputs = document.querySelectorAll('input[name="amount[]"]');
        amountInputs.forEach(input => {
            input.addEventListener('input', function() {
                calculateTotalAmount();
                calculateMinusTotalAmount();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            calculateTotalAmount();
            calculateMinusTotalAmount();
        });

        window.addEventListener('beforeunload', function(event) {
            // Check if form has been modified by comparing current values with initial values
            const form = document.querySelector('form');
            const inputs = form.querySelectorAll(
                'input[name="amount[]"], input[name="name[]"], input[name="type[]"]');
            let isFormChanged = false;

            inputs.forEach(input => {
                if (input.value !== input.defaultValue) {
                    isFormChanged = true;
                }
            });

            if (isFormChanged) {
                // Show warning message
                const message =
                    "Ada perubahan yang belum disimpan. Apakah Anda yakin ingin meninggalkan halaman ini?";
                event.returnValue = message; // Standard for modern browsers
                return message; // For older browsers
            }
        });
    </script>
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'Komponen Gaji'])
    </div>
    <div class="container-fluid">
        <form action="{{ route('superadmin.payroll.component.store', $payroll->id) }}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h6 class="text-success"><i class="fa-solid fa-plus"></i> Komponen Gaji</h6>
                            <h6 class="text-success" id="plusTotalAmount">Total: {{ formatRupiah($payroll->total_amount) }}
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group" id="plusContainer">
                                @foreach ($payrollComponents as $component)
                                    @if ($component->type === 'basic' || $component->type === 'allowance' || $component->type === 'bonus')
                                        <div
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <input type="hidden" name="name[]" value="{{ $component->name }}">
                                            <input type="hidden" name="amount[]" value="{{ $component->amount }}">
                                            <input type="hidden" name="type[]" value="{{ $component->type }}">
                                            <div>
                                                <h6 class="mb-1">{{ $component->name ?? '-' }} <sup><span
                                                            class="badge bg-primary">{{ $component->type }}</span></sup>
                                                </h6>
                                                <small class="text-muted">{{ formatRupiah($component->amount) }}</small>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-danger btn-sm" type="button"
                                                    onclick="deleteComponent(this)">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <button class="btn btn-primary mt-3" onclick="generateInputForm('plusContainer', 'plus')">Tambah
                                Komponen
                                Gaji</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h6 class="text-danger"><i class="fa-solid fa-minus"></i> Komponen Gaji</h6>
                            <h6 class="text-danger" id="minusTotalAmount">Total: {{ formatRupiah($payroll->total_amount) }}
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="list-group" id="minusContainer">
                                @foreach ($payrollComponents as $component)
                                    @if ($component->type === 'deduction' || $component->type === 'tax')
                                        <div
                                            class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <input type="hidden" name="name[]" value="{{ $component->name }}">
                                            <input type="hidden" name="amount[]" value="{{ $component->amount }}">
                                            <input type="hidden" name="type[]" value="{{ $component->type }}">
                                            <div>
                                                <h6 class="mb-1">{{ $component->name ?? '-' }}</h6>
                                                <small class="text-muted">{{ formatRupiah($component->amount) }}</small>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-danger btn-sm" type="button"
                                                    onclick="deleteComponent(this)">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <button class="btn btn-primary mt-3"
                                onclick="generateInputForm('minusContainer', 'minus')">Tambah
                                Komponen
                                Gaji</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-save me-1"></i> Simpan</button>
                <a href="{{ route('superadmin.payroll.index', $payrollPeriodId) }}" class="btn btn-secondary"><i
                        class="fa-solid fa-arrow-left me-1"></i> Kembali</a>
            </div>
        </form>
    </div>
@endsection
