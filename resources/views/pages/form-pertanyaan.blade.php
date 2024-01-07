@extends('layouts.feedback')

@section('title', 'Feedback | Alrescha Wash')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content" style="padding-right:15%;padding-left:15%">
    <section class="section">
        <div class="section-header">
            <h1>Feedback</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Terima kasih {{ $feedback->customer_name }} telah mempercayai kami </h4>
                            <div class="card-header-action">
                                <a class="btn btn-icon btn-info" href="#">No Invoice :
                                    INV/{{ $feedback->transaction->id }}</a>
                            </div>
                        </div>
                        <form action="" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <h2 class="section-title mt-0">Data Transaksi</h2>
                                <table class="mb-3">
                                    <tr>
                                        <td style="width: 50%">Nama</td>
                                        <td style="width: 10%">:</td>
                                        <td style="width: 80%">{{ $feedback->customer_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Belanja</td>
                                        <td>:</td>
                                        <td>{{ $feedback->transaction->created_at->isoFormat('dddd, D MMMM Y H:ss') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Belanjaan</td>
                                        <td>:</td>
                                        <td>Rp. {{ Helper::formatRupiah($feedback->transaction->total_price) }}</td>
                                    </tr>
                                </table>
                                <p>Masukan dari kamu akan membuat kami berbenah, mohon untuk mengisinya dengan
                                    sebenar-benarnya</p>

                                <div id="accordion">
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                                            <h4>Pertanyaan 1</h4>
                                        </div>
                                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                            <p class="mb-0">Bagaimana pendapat anda terhadap kualitas produk toko
                                                kami?
                                            </p>
                                            <div class="form-group">
                                                <div class="selectgroup w-100">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban1" value="5" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">Sangat Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban1" value="4" class="selectgroup-input">
                                                        <span class="selectgroup-button">Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban1" value="3" class="selectgroup-input">
                                                        <span class="selectgroup-button">Cukup</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban1" value="2" class="selectgroup-input">
                                                        <span class="selectgroup-button">Kurang</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban1" value="1" class="selectgroup-input">
                                                        <span class="selectgroup-button">Sangat Kurang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                                            <h4>Pertanyaan 2</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                            <p class="mb-0">Bagaimana pelayanan yang diberikan customer kami Ketika
                                                anda
                                                berbelanja di toko kami?
                                            </p>
                                            <div class="form-group">
                                                <div class="selectgroup w-100">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban2" value="5" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">Sangat Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban2" value="4" class="selectgroup-input">
                                                        <span class="selectgroup-button">Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban2" value="3" class="selectgroup-input">
                                                        <span class="selectgroup-button">Cukup</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban2" value="2" class="selectgroup-input">
                                                        <span class="selectgroup-button">Kurang</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban2" value="1" class="selectgroup-input">
                                                        <span class="selectgroup-button">Sangat Kurang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                                            <h4>Pertanyaan 3</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                            <p class="mb-0">Hal apa yang bisa kami perbaiki dalam menjaga kepuasan
                                                pelanggan kami?</p>
                                            <div class="form-group">
                                                <div class="selectgroup w-100">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban3" value="5" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">Sangat Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban3" value="4" class="selectgroup-input">
                                                        <span class="selectgroup-button">Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban3" value="3" class="selectgroup-input">
                                                        <span class="selectgroup-button">Cukup</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban3" value="2" class="selectgroup-input">
                                                        <span class="selectgroup-button">Kurang</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban3" value="1" class="selectgroup-input">
                                                        <span class="selectgroup-button">Sangat Kurang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4">
                                            <h4>Pertanyaan 4</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                            <p class="mb-0">Apa permasalahan yang muncul Ketika berbelanja di toko
                                                kami?
                                            </p>
                                            <div class="form-group">
                                                <div class="selectgroup w-100">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban4" value="5" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">Sangat Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban4" value="4" class="selectgroup-input">
                                                        <span class="selectgroup-button">Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban4" value="3" class="selectgroup-input">
                                                        <span class="selectgroup-button">Cukup</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban4" value="2" class="selectgroup-input">
                                                        <span class="selectgroup-button">Kurang</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban4" value="1" class="selectgroup-input">
                                                        <span class="selectgroup-button">Sangat Kurang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-5">
                                            <h4>Pertanyaan 5</h4>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                                            <p class="mb-0">Silahkan berikan saran dan kritikan terhadap toko kami!
                                            </p>
                                            <div class="form-group">
                                                <div class="selectgroup w-100">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban5" value="5" class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">Sangat Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban5" value="4" class="selectgroup-input">
                                                        <span class="selectgroup-button">Baik</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban5" value="3" class="selectgroup-input">
                                                        <span class="selectgroup-button">Cukup</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban5" value="2" class="selectgroup-input">
                                                        <span class="selectgroup-button">Kurang</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="inp_jawaban5" value="1" class="selectgroup-input">
                                                        <span class="selectgroup-button">Sangat Kurang</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Kirim Jawaban</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush