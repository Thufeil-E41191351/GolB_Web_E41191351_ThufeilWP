@extends('backend.layouts.template')
@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="dashboard">Home</a></li>
                        <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                        <li><i class="fa fa-files-o"></i>Pengalaman Kerja</li>
                    </ol>
                </div>
            </div>

            {{-- form validation --}}
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Pengalaman Kerja
                        </header>
                        <div class="panel-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <a href="{{ route('pengalaman_kerja.create') }}">
                                <button class="btn btn-primary" type="button"><i class="fa fa-id-card-o"></i> Tambah</button>
                            </a>

                            <br><br>
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th><i class="icon_bag"></i> Nama</th>
                                        <th><i class="icon_document"></i> Jabatan</th>
                                        <th><i class="icon_calendar"></i> Tahun Masuk</th>
                                        <th><i class="icon_calendar"></i> Tahun Selesai</th>
                                        <th><i class="icon_cogs"></i> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengalaman_kerja as $item)

                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->jabatan }}</td>
                                            <td>{{ $item->tahun_masuk }}</td>
                                            <td>{{ $item->tahun_keluar }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <form action="{{ route('pengalaman_kerja.destroy', $item->id) }}"
                                                        method="post">
                                                        <a href="{{ route('pengalaman_kerja.edit', $item->id) }}"
                                                            class="btn btn-warning"><i class="fa fa-pencil"></i> edit
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Apakah anda yakin ingin manghapus data ini?')">
                                                            <i class="fa fa-trash-o"></i> hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>

            <!--/.row-->


        </section>
    </section>
    <!--main content end-->

@endsection
