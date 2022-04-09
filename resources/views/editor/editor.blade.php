@extends('layouts.admin.app')
@section('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/confetti.css">

@endsection

@section('content')
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title Here" required/>
                            </div>
                            <div class="form-group">
                                {{--                            <label><strong>Description :</strong></label>--}}
                                <textarea class="summernote d-none"  name="description"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit" value="Save as draft">Save as draft</button>
                                <button class="btn btn-info" type="submit" value="Preview">Preview</button>
                                <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#schedule_press_release_date_time" value="Schedule Press Release Time/Date">Schedule Press Release Time/Date</button>
                                <button class="btn btn-success" type="submit" value="Ready to Publish">Ready to Publish</button>
                            </div>
                        </form>

                        <!--begin::Modal-->
                        <div class="modal fade" tabindex="-1" id="schedule_press_release_date_time">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Schedule Press Release Date/Time</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <!--begin::Close-->
{{--                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                            <span class="svg-icon svg-icon-2x"></span>
                                        </div>--}}
                                        <!--end::Close-->
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-0">
                                            <label for="" class="form-label">Select date/time</label>
                                            <input class="form-control form-control-solid" placeholder="Pick date" id="kt_datepicker_10"/>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light close" data-dismiss="modal" aria-label="Close">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Modal-->

@endsection

@section('script')



<script type="text/javascript">

        $("#kt_datepicker_10").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });


</script>
@endsection