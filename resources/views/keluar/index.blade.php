<x-app-layout>
    <style>
        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #E7EBF0;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
            padding: 8px 0;
            background-color: #fff;
        }

        .autocomplete-items div {
            padding: 3px 20px;
            line-height: 24px;
            cursor: pointer;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #727CF5;
            color: #fff;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

    </style>

    <x-slot name="title">
        {{ __('Surat Keluar') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Surat Keluar') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Surat Keluar</li>
        </ol>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        {{-- novalidate --}}
                        <form class="row needs-validation" method="POST" action="{{ route('suratKeluarCreate') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-4">
                                <div class="form-floating mb-3 card">
                                    <input type="text" name="no_surat" class="form-control" id="nomor" placeholder=""
                                        required autocomplete="on" />
                                    <label for="nomor">Nomor Surat</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-floating mb-3 card">
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder=""
                                        required />
                                    <label for="tanggal">Tanggal Surat</label>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-floating mb-3 card">
                                    <input type="date" name="keluar" class="form-control" id="masuk" placeholder=""
                                        required value="{{ date('Y-m-d') }}" />
                                    <label for="masuk">Tanggal Masuk</label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-floating mb-3 autocomplete card">
                                    <input id="dari" name="dari" type="text" placeholder="" class="form-control"
                                        required autocomplete="off" />
                                    <label for="dari">Dari</label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-floating mb-3 autocomplete card">
                                    <input id="penerima" name="penerima" type="text" placeholder="" class="form-control"
                                        required autocomplete="off" />
                                    <label for="penerima">Kepada</label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-floating  mb-3 card">
                                    <input type="text" name="perihal" id="perihal" class="form-control" placeholder=""
                                        required autocomplete="on" />
                                    <label for="perihal">Perihal</label>
                                </div>
                            </div>

                            {{-- <div class="col-sm-12">
                                    <div class="form-floating  mb-3 card">
                                        <textarea class="form-control" placeholder="Leave a comment here"
                                            id="floatingTextarea" style="height: 150px;"></textarea>
                                        <label for="floatingTextarea">Disposisi</label>
                                    </div>
                                </div> --}}

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body card-custom rounded">
                                            <h6 class="card-sub mb-1">File Surat</h6>
                                            <input type="file" name="file_surat" id="example-fileinput"
                                                class="form-control file-custom">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12 text-end">
                                <button type="submit" class="btn btn-secondary"> Simpan </button>
                            </div>
                        </form>


                        <!-- end row-->

                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <script>
        function autocomplete(inp, arr) {
            var currentFocus;
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                var x = 0;
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                this.parentNode.appendChild(a);
                for (i = 0; i < arr.length; i++) {

                    if (arr[i].toUpperCase().includes(val.toUpperCase())) {
                        b = document.createElement("DIV");
                        if (x < 6) {
                            b.innerHTML = arr[i].substr(0, val.length);
                            b.innerHTML += arr[i].substr(val.length);
                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                            b.addEventListener("click", function(e) {
                                inp.value = this.getElementsByTagName("input")[0].value;
                                closeAllLists();
                            });
                            a.appendChild(b);
                        }
                        x++;

                    }

                }
            });

            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    currentFocus++;
                    addActive(x);
                } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(x);
                } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                if (!x) return false;
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        var dinas = [
            @foreach ($pengirim as $n => $d)
                "{{ $d->nama }}",
            @endforeach
        ];

        var bidang = [
            @foreach ($bidang as $n => $d)
                "{{ $d->nama }}",
            @endforeach
        ];

        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("penerima"), dinas);
        autocomplete(document.getElementById("dari"), bidang);

    </script>
</x-app-layout>
