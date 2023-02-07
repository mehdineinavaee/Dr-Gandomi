@extends('layouts.app')
@section('title', 'ویرایش محصول')
@section('content')
    <section class="candidates-resume-area ptb-50">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off"
                    action="{{ route('products.update', ['product' => $product->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر (330px&times;390px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>عنوان</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $product->title }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>قیمت</label>
                                <input type="text" name="price" id="price" class="form-control"
                                    onkeyup="separateNum(this.value,this,'editNumToLetter');"
                                    value="{{ number_format($product->price) }}">
                                {{-- name id div (numToLetter) nabayad hamnam id input (price) bashad --}}
                                <div id="editNumToLetter" style="text-align: justify">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>درصد تخفیف</label>
                                <input type="text" name="discount" id="discount" class="form-control"
                                    value="{{ $product->discount }}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="new" id="new"
                                        {{ $product->new === 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="new">
                                        به عنوان محصول جدید ثبت شود
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            ثبت
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
