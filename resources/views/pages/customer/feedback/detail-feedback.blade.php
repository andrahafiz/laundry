@extends('layouts.app')
@section('title', 'Detail Data Feedback')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('library/chocolat/dist/css/chocolat.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route(Helper::AdminOrUser('feedback.index')) }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail Data Feedback</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="#">Feedback</a></div>
                <div class="breadcrumb-item">Detail Data Feedback</div>
            </div>
        </div>

        <div class="section-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body mt-4">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Invoice
                                    Transaksi</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name='transactions_id' value="{{ old('transactions_id') ?? $feedback->transactions_id }}" disabled>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                    Customer</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name='customer_name' value="{{ old('customer_name') ?? $feedback->customer_name }}" disabled>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP
                                    Customer</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name='nohp_customer' value="{{ old('nohp_customer') ?? $feedback->nohp_customer }}" disabled>

                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan
                                    1</label>
                                <div class="col-sm-12 col-md-7">
                                    <h6 class="">Kesan apa yang anda dapatkan Ketika berbelanja di toko kami?
                                    </h6>
                                    <p class="">
                                        <x-AnswerFeedback type="{{ $feedback->jawaban1 }}"></x-AnswerFeedback>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan
                                    2</label>
                                <div class="col-sm-12 col-md-7">
                                    <h6 class="">Bagaimana pelayanan yang diberikan customer kami Ketika anda
                                        berbelanja di toko kami?</h6>
                                    <x-AnswerFeedback type="{{ $feedback->jawaban2 }}"></x-AnswerFeedback>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan
                                    3</label>
                                <div class="col-sm-12 col-md-7">
                                    <h6 class="">Hal apa yang bisa kami perbaiki dalam menjaga kepuasan pelanggan
                                        kami?
                                    </h6>
                                    <x-AnswerFeedback type="{{ $feedback->jawaban3 }}"></x-AnswerFeedback>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan
                                    4</label>
                                <div class="col-sm-12 col-md-7">
                                    <h6 class="">Apa permasalahan yang muncul Ketika berbelanja di toko kami?
                                    </h6>
                                    <x-AnswerFeedback type="{{ $feedback->jawaban4 }}"></x-AnswerFeedback>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan
                                    5</label>
                                <div class="col-sm-12 col-md-7">
                                    <h6 class=""> Silahkan berikan saran dan kritikan terhadap toko kami!
                                    </h6>
                                    <x-AnswerFeedback type="{{ $feedback->jawaban5 }}"></x-AnswerFeedback>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
<script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-post-create.js') }}"></script>
@endpush