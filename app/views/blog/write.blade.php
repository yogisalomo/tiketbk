@extends ('layouts.master')

@section ('content')

{{Form::model($post, array('class'=>'form-horizontal'))}}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kategori </label>

                            <div class="col-sm-9">
                                {{Form::select('post_category', array('MU'=>'MU', 'Korea'=>'Korea', 'Pribadi'=>'Pribadi', 'Code'=>'Code'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Judul </label>

                            <div class="col-sm-9">
                                {{Form::text('title')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Deskripsi </label>

                            <div class="col-sm-9">
                                {{Form::textarea('description')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Isi</label>

                            <div class="col-sm-9">
                                {{Form::textarea('content')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                {{Form::submit('Simpan', array('class'=>'btn btn-info'))}}

                            </div>
                        </div>
                    {{Form::close()}}

@stop