@extends('layouts.app')
@section('title', 'محصول جدید')
@section('content')
    @include('common.breadcrumbs', [
        'data' => [['title' => 'افزودن محصول', 'url' => url()->current(), 'bg' => $settings->products]],
    ])
    <section class="candidates-resume-area ptb-100">
        <div class="container">
            <div class="candidates-resume-content">
                <form class="resume-info" autocomplete="off" action="{{ route('products.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر محصول (330px&times;390px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover" name="cover">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>تصویر جزئیات محصول (700px&times;671px)</label>
                                <input type="file" class="form-control" accept="image/*" id="cover_detail"
                                    name="cover_detail">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>عنوان</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}"
                                    class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>ویرایش</label>
                                <input type="text" name="edition" id="edition" value="{{ old('edition') }}"
                                    class="form-control @error('edition') is-invalid @enderror">
                                @error('edition')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>انتشارات</label>
                                <select id="publisher" name="publisher" class="form-control">
                                    <option value="" selected>انتشارات را انتخاب کنید
                                    </option>
                                    @foreach ($publishers as $publisher)
                                        <option value="{{ $publisher->id }}"
                                            {{ old('publishers') == $publisher->id ? 'selected' : '' }}>
                                            {{ $publisher->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>نویسنده</label>
                                <select id="authors" name="authors" placeholder="نویسنده را انتخاب کنید"
                                    data-search="true" data-silent-initial-value-set="true" multiple>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}"
                                            {{ old('authors') == $author->id ? 'selected' : '' }}>
                                            {{ $author->fullName }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>مترجم</label>
                                <select id="translators" name="translators" value="0"
                                    placeholder="مترجم را انتخاب کنید" data-search="true"
                                    data-silent-initial-value-set="true" multiple>
                                    @foreach ($translators as $translator)
                                        <option value="{{ $translator->id }}">
                                            {{ $translator->fullName }}
                                        </option>
                                    @endforeach
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>قیمت</label>
                                <input type="text" name="price" id="price" value="{{ old('price') }}"
                                    class="form-control @error('price') is-invalid @enderror"
                                    onkeyup="separateNum(this.value,this,'priceNumToLetter');">
                                {{-- name id div (numToLetter) nabayad hamnam id input (price) bashad --}}
                                <div id="priceNumToLetter" style="text-align: justify">
                                </div>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <span style="color:red">*</span>
                                <label>درصد تخفیف</label>
                                <input type="text" name="discount" id="discount" value="{{ old('discount') }}"
                                    class="form-control @error('discount') is-invalid @enderror">
                                @error('discount')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="new" id="new">
                                    <label class="form-check-label" for="new">
                                        به عنوان محصول جدید ثبت شود
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea name="description" id="description" class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
