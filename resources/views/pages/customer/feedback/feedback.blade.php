@extends('layouts.app')

@section('title', 'Feedback')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Feedback</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Feedback</div>
                </div>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible alert-has-icon show fade">
                    <div class="alert-icon"><i class="far fa-circle-check"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Sukses</div>
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        {{ session('success') }}!
                    </div>
                </div>
            @endif
            @error('error')
                <div class="alert alert-danger alert-dismissible alert-has-icon show fade">
                    <div class="alert-icon"><i class="far fa-circle-xmark"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Gagal</div>
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        {{ $message }}.
                    </div>
                </div>
            @enderror
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Data Feedback</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-striped table align-middle" id="table-transaksi">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th>ID Invoice</th>
                                                <th>Customer</th>
                                                <th>No WA Customer</th>
                                                <th>Tanggal Isi Feedback</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($feedbacks as $feedback)
                                                <tr>
                                                    <td class="text-center align-middle">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="align-middle">
                                                        INV/{{ $feedback->transaction->id }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $feedback->customer_name }}</td>
                                                    <td class="align-middle">
                                                        {{ $feedback->nohp_customer }}</td>
                                                    <td class="align-middle">
                                                        {{ $feedback->updated_at->diffForHumans() }}</td>
                                                    <td width="10%" class="ali gn-middle">
                                                        <a href="{{ route(Helper::AdminOrUser('invoice'), $feedback->transaction->id) }}"
                                                            class="btn btn-icon btn-sm btn-warning">
                                                            <i class="fas fa-file-invoice"></i>
                                                        </a>
                                                        <a href="{{ route(Helper::AdminOrUser('feedback.show'), $feedback->id) }}"
                                                            class="btn btn-icon btn-sm btn-primary" alt="Detail">
                                                            <i class="fas fa-circle-info"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="buttons float-right">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            {{ $feedbacks->onEachSide(1)->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
