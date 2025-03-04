@extends('layouts.simple.master')

@section('title', 'API Test')

@section('scripts')
    <script>
        function addHeader() {
            const container = document.getElementById("headers-container");

            const div = document.createElement("div");
            div.classList.add("d-flex", "mb-2");

            const keyInput = document.createElement("input");
            keyInput.type = "text";
            keyInput.placeholder = "Header Key";
            keyInput.classList.add("form-control", "me-2");

            const valueInput = document.createElement("input");
            valueInput.type = "text";
            valueInput.placeholder = "Header Value";
            valueInput.classList.add("form-control", "me-2");

            const removeBtn = document.createElement("button");
            removeBtn.textContent = "X";
            removeBtn.classList.add("btn", "btn-danger", "btn-sm");
            removeBtn.onclick = function() {
                container.removeChild(div);
            };

            div.appendChild(keyInput);
            div.appendChild(valueInput);
            div.appendChild(removeBtn);

            container.appendChild(div);
        }

        function getHeaders() {
            const headers = {};
            document.querySelectorAll("#headers-container div").forEach(div => {
                const key = div.children[0].value.trim();
                const value = div.children[1].value.trim();
                if (key && value) {
                    headers[key] = value;
                }
            });
            return headers;
        }

        function addBody() {
            const container = document.getElementById("body-container");

            const div = document.createElement("div");
            div.classList.add("d-flex", "mb-2");

            const keyInput = document.createElement("input");
            keyInput.type = "text";
            keyInput.placeholder = "Body Key";
            keyInput.classList.add("form-control", "me-2");

            const valueInput = document.createElement("input");
            valueInput.type = "text";
            valueInput.placeholder = "Body Value";
            valueInput.classList.add("form-control", "me-2");

            const removeBtn = document.createElement("button");
            removeBtn.textContent = "X";
            removeBtn.classList.add("btn", "btn-danger", "btn-sm");
            removeBtn.onclick = function() {
                container.removeChild(div);
            };

            div.appendChild(keyInput);
            div.appendChild(valueInput);
            div.appendChild(removeBtn);

            container.appendChild(div);
        }

        function getBody() {
            const body = {};
            document.querySelectorAll("#body-container div").forEach(div => {
                const key = div.children[0].value.trim();
                const value = div.children[1].value.trim();
                if (key && value) {
                    body[key] = value;
                }
            });
            return body;
        }

        async function sendRequest() {
            const method = document.getElementById('method').value.toUpperCase();
            const url = document.getElementById('url').value;
            const headers = getHeaders();
            let body = getBody();

            if (!url) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'URL tidak boleh kosong!',
                });
                return;
            }

            // cek kalau body bukan JSON, ubah ke URL-encoded
            if (headers["Content-Type"] === "application/x-www-form-urlencoded") {
                const params = new URLSearchParams();
                Object.entries(body).forEach(([key, value]) => {
                    params.append(key, value);
                });
                body = params.toString();
            }
            // kalau pakai form-data, pakai FormData object
            else if (headers["Content-Type"] === "multipart/form-data") {
                const formData = new FormData();
                Object.entries(body).forEach(([key, value]) => {
                    formData.append(key, value);
                });
                body = formData;
                delete headers["Content-Type"]; // browser akan set otomatis
            }
            // kalau JSON, pastikan stringified
            else {
                body = JSON.stringify(body);
            }

            try {
                const response = await fetch(url, {
                    method,
                    headers,
                    body
                });
                const result = await response.json();
                document.getElementById('response').textContent = JSON.stringify(result, null, 2);
            } catch (error) {
                document.getElementById('response').textContent = 'Error: ' + error.message;
            }
        }
    </script>
    {{-- <script>
        // fungsi buat nyimpen request ke localStorage
        function saveRequest() {
            const request = {
                method: document.getElementById('method').value,
                url: document.getElementById('url').value,
                headers: getHeaders(),
                body: getBody()
            };

            let savedRequests = JSON.parse(localStorage.getItem('savedRequests')) || [];
            savedRequests.push(request);
            localStorage.setItem('savedRequests', JSON.stringify(savedRequests));
            loadSavedRequests(); // Refresh list
        }

        // fungsi buat load request yang udah disimpan
        function loadSavedRequests() {
            const savedRequests = JSON.parse(localStorage.getItem('savedRequests')) || [];
            const container = document.getElementById('saved-requests');
            container.innerHTML = '';

            savedRequests.forEach((req, index) => {
                const div = document.createElement('div');
                div.classList.add('d-flex', 'justify-content-between', 'mb-2');
                div.innerHTML = `
            <button class="btn btn-sm btn-secondary me-2" onclick="loadRequest(${index})">${req.method} ${req.url}</button>
            <button class="btn btn-sm btn-danger" onclick="deleteRequest(${index})">X</button>
        `;
                container.appendChild(div);
            });
        }

        // fungsi buat load request yang dipilih
        function loadRequest(index) {
            const savedRequests = JSON.parse(localStorage.getItem('savedRequests')) || [];
            if (!savedRequests[index]) return;

            const req = savedRequests[index];
            document.getElementById('method').value = req.method;
            document.getElementById('url').value = req.url;

            // isi headers
            document.getElementById('headers-container').innerHTML = '';
            Object.entries(req.headers).forEach(([key, value]) => {
                addHeader();
                const lastHeader = document.querySelectorAll('#headers-container div').length - 1;
                document.querySelectorAll('#headers-container div input')[lastHeader * 2].value = key;
                document.querySelectorAll('#headers-container div input')[lastHeader * 2 + 1].value = value;
            });

            // isi body
            document.getElementById('body-container').innerHTML = '';
            Object.entries(req.body).forEach(([key, value]) => {
                addBody();
                const lastBody = document.querySelectorAll('#body-container div').length - 1;
                document.querySelectorAll('#body-container div input')[lastBody * 2].value = key;
                document.querySelectorAll('#body-container div input')[lastBody * 2 + 1].value = value;
            });
        }

        // fungsi buat hapus request
        function deleteRequest(index) {
            let savedRequests = JSON.parse(localStorage.getItem('savedRequests')) || [];
            savedRequests.splice(index, 1);
            localStorage.setItem('savedRequests', JSON.stringify(savedRequests));
            loadSavedRequests();
        }

        document.addEventListener('DOMContentLoaded', loadSavedRequests);
    </script> --}}
@endsection

@section('main_content')
    <div class="container-fluid">
        @include('layouts.components.breadcrumb', ['header' => 'API Tester'])
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">API Tester</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-2">
                                <div class="form-group">
                                    <select id="method" class="form-control mb-3" style="background-color: var(--bs-primary) !important; color: white;" onchange="this.style.backgroundColor = this.value === 'GET' ? 'var(--bs-primary)' : this.value === 'POST' ? 'var(--bs-success)' : this.value === 'PUT' ? 'var(--bs-warning)' : this.value === 'DELETE' ? 'var(--bs-danger)' : ''; this.style.color = 'white';">
                                        <option value="GET" class="bg-primary text-white">GET</option>
                                        <option value="POST" class="bg-success text-white">POST</option>
                                        <option value="PUT" class="bg-warning text-white">PUT</option>
                                        <option value="DELETE" class="bg-danger text-white">DELETE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    {{-- <label for="url">URL:</label> --}}
                                    <input type="text" id="url" class="form-control mb-3"
                                        placeholder="https://api.example.com/data">
                                </div>
                            </div>
                            <div class="col-12 col-md-2">
                                <button class="btn btn-primary w-100" onclick="sendRequest()"> <i class="fa fa-paper-plane me-2"></i> Kirim</button>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="headers">Headers:</label>
                            <div class="border p-2 rounded">
                                <div id="headers-container">
                                    {{-- <div class="d-flex mb-2">
                                        <input type="text" placeholder="Header Key" class="form-control me-2"
                                            value="Content-Type">
                                        <input type="text" placeholder="Header Value" class="form-control me-2"
                                            value="application/json">
                                        <button class="btn btn-danger btn-sm">X</button>
                                    </div> --}}
                                    <div class="d-flex mb-2">
                                        <input type="text" placeholder="Header Key" class="form-control me-2">
                                        <input type="text" placeholder="Header Value" class="form-control me-2">
                                        <button class="btn btn-danger btn-sm">X</button>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-sm btn-success mb-3" onclick="addHeader()">Tambah
                                    Header</button>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="body">Body:</label>
                            <div class="border p-2 rounded">
                                <div id="body-container">
                                    <div class="d-flex mb-2">
                                        <input type="text" placeholder="Body Key" class="form-control me-2">
                                        <input type="text" placeholder="Body Value" class="form-control me-2">
                                        <button class="btn btn-danger btn-sm">X</button>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-sm btn-success mb-3" onclick="addBody()">Tambah
                                    Body</button>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <h3 class="mb-2">Response:</h3>
                            <pre id="response" class="rounded border p-3"></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
