@extends('layouts.app')

@section('title', 'Kasir')

@push('style')
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kasir</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Kasir</div>
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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="section-body">
                <div class="row">
                    <div class="col">
                        <form method="get">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search" placeholder="" aria-label="">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    @if (count($produks) < 1)
                        <div class="col text-center">
                            <h1>Tidak ada produk</h1>

                        </div>
                    @endif
                    @foreach ($produks as $produk)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 ">
                            <article class="article article-style-b shadow">
                                <div class="article-header rounded-top">
                                    <div class="article-image"
                                        data-background="{{ Helper::setUrlImage($produk->image, 'news/img13.jpg') }}">
                                    </div>
                                    <div class="article-badge">
                                        <div
                                            class="article-badge-item {{ $produk->stock != 0 ? 'btn-warning' : 'btn-danger' }} ">
                                            <i class="fas fa-boxes"></i> Stok : {{ $produk->stock }}
                                        </div>
                                    </div>
                                </div>
                                <div class="article-details rounded-bottom">
                                    <div class="article-title ">
                                        <h2><a href="#">{{ $produk->name_product }}</a></h2>
                                    </div>
                                    {!! Str::limit($produk->description, 65, ' ...') !!}
                                    <div class="article-cta mt-3">
                                        <div class="row">
                                            <div class="col-8" id="harga">
                                                <p class="h6 text-left text-dark font-weight-bolder my-2">
                                                    Rp.
                                                    {{ Helper::formatRupiah($produk->price) }}</p>
                                            </div>
                                            <div class="col-4 ">
                                                @if ($produk->stock == 0)
                                                    <a type="button" class="btn disabled btn-secondary">
                                                        <i class="fas fa-cart-shopping"></i>
                                                    </a>
                                                @else
                                                    <form
                                                        action="{{ route(Helper::AdminOrUser('cart.add-to-cart'), $produk->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input name="products_id" type="hidden"
                                                            value="{{ $produk->id }}">
                                                        <button type="submit" class="btn btn-success" data-toggle="tooltip"
                                                            data-placement="top" title="Tambahkan Kekeranjang"><i
                                                                class="fas fa-cart-shopping"></i></button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="float-right">

                {{ $produks->links() }}
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        axios.get()
        $(document).ready(function() {
            $('.count').prop('disabled', true);
            $(document).on('click', '.plus', function() {
                $('.count').val(parseInt($('.count').val()) + 1);
            });
            $(document).on('click', '.minus', function() {
                $('.count').val(parseInt($('.count').val()) - 1);
                if ($('.count').val() == 0) {
                    $('.count').val(1);
                }
            });
        });
    </script>
@endpush
