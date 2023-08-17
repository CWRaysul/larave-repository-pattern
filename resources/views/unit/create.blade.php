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
                               Unit Add
                            </h3>
                        </div>
                    </div>

                    <!--begin::Form-->
                    <form action="{{ route('unit.store') }}" method="POST" enctype="multipart/form" class="kt-form kt-form--label-right" id="kt_form_1">
                        <div class="kt-portlet__body">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Name *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name"  placeholder="Enter your Name">
                                     @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12">Radios *</label>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="kt-radio-inline">
                                        <label class="kt-radio">
                                            <input type="radio"  name="status" value="1"> Active
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="status" value="0"> Inactive
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
                                        <button type="submit" class="btn btn-success">Submit</button>
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
