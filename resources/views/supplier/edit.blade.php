@extends('layouts.app')

@section('container')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--begin::Portlet-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                               Supplier Edit
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form action="{{ route('supplier.update', $supplier->id) }}" method="POST" enctype="multipart/form" class="kt-form kt-form--label-right" id="kt_form_1">
                        <div class="kt-portlet__body">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Name *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="name" value="{{ $supplier->name }}" id="name"  placeholder="Enter your Name">
                                     @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Company Name *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="company_name" value="{{ $supplier->company_name }}" id="company_name"  placeholder="Enter your company name">
                                     @if ($errors->has('company_name'))
                                        <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Mobile *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="mobile" value="{{ $supplier->mobile }}" id="mobile"  placeholder="Enter your company mobile">
                                     @if ($errors->has('mobile'))
                                        <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Address *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="address" value="{{ $supplier->address }}" id="address"  placeholder="Enter your company address">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Radios *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio"  name="status" value="1" @if(1 == $supplier->status) checked @endif> Active
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="status" value="0" @if(0 == $supplier->status) checked @endif> Inactive
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">Please select an option</span>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
@endsection
