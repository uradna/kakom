<x-app-layout>
    <x-slot name="title">
        {{ __('Daftar Pengguna') }}
    </x-slot>

    <x-slot name="header">
        {{ __('Daftar Pengguna') }}
    </x-slot>

    <x-slot name="breadcrumb">
        <ol class="breadcrumb m-0">

        </ol>
    </x-slot>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-sm-12 text-end">
                        <a href="{{ route('newPengguna') }}" class="btn btn-info mb-2">
                            <i class="mdi mdi-plus-circle me-2"></i> Tambah Pengguna
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <thead class=" bg-white " style="border-top: solid 2px #EDEFF1;">
                                <tr>
                                    <td>
                                        <span class="text-dark-50 font-14 fw-bold">Nama User</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-50 font-14 fw-bold">Email</span>
                                    </td>
                                    <td>
                                        <span class="text-dark-50 font-14 fw-bold">Jabatan</span>
                                    </td>
                                    <td><span class="text-dark-50 font-14 fw-bold">Level</span> </td>
                                    <td width="5%"> </td>
                                </tr>
                            </thead>
                            <tbody class="text-dark">
                                @foreach ($data as $d)
                                    <tr>
                                        <td>
                                            {{ $d->name }}
                                        </td>
                                        <td>
                                            {{ $d->email }}
                                        </td>
                                        <td>
                                            {{ $d->jabatan }}
                                        </td>
                                        <td>
                                            @switch($d->level)
                                                @case('1')
                                                    Admin
                                                @break
                                                @case('2')
                                                    Kepala Dinas
                                                @break
                                                @default
                                                    Staff
                                            @endswitch
                                        </td>
                                        <td>
                                            <a href="#" class="action-icon me-2"> <i
                                                    class="mdi mdi-square-edit-outline h3 text-info"></i></a>
                                            <a href="#" class="action-icon" data-bs-toggle="modal"
                                                data-bs-target="#danger-alert{{ $d->id }}">
                                                <i class="mdi mdi-delete h3 text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    @foreach ($data as $u)
        {{-- ----------------- MODAL START ----------------- --}}
        <div id="danger-alert{{ $u->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-danger">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="mdi mdi-alert-circle h1"></i>
                            <p class="mt-3">
                                Anda yakin ingin menghapus user {{ $u->name }}?

                            </p>
                            <form method="POST" action="{{ route('deletePengguna') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $u->id }}">
                                <button type="button" class="btn btn-light my-2 mx-2" data-bs-dismiss="modal"
                                    style="min-width: 80px">Tidak</button>
                                <button type="submit" class="btn btn-light my-2 mx-2"
                                    style="min-width: 80px">Ya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ----------------- MODAL END ----------------- --}}
    @endforeach
</x-app-layout>
