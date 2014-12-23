@extends ('layouts.master')

@section ('content')    
  	<h2>Order Ticket</h2>
    {{Form::open(['url' => 'processConfirmation','method'=>'POST'])}}
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Plane ID </label>
                <div class="col-sm-9">
                    {{Form::select('user_id', array('549883722a372d0200902a4c'=>'549883722a372d0200902a4c','549883502a372d0200902a4b'=>'549883502a372d0200902a4b','549882de2a372d0200902a4a'=>'549882de2a372d0200902a4a','5498821b2a372d0200902a49'=>'5498821b2a372d0200902a49'))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Class </label>
                <div class="col-sm-9">
                    {{Form::text('class',null,array(
                            'id'=> 'class'
                    ))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>
                <div class="col-sm-9">
                    {{Form::text('name',null,array(
                            'id'=> 'name'
                    ))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> KTP Number </label>
                <div class="col-sm-9">
                    {{Form::text('ktp_number',null,array(
                            'id'=> 'ktp_number'
                    ))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone Number </label>
                <div class="col-sm-9">
                    {{Form::text('phone_number',null,array(
                            'id'=> 'phone_number'
                    ))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
                <div class="col-sm-9">
                    {{Form::text('email',null,array(
                            'id'=> 'email'
                    ))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>

        <div class="form-group">
                <div class="col-sm-9">
                  {{Form::submit('Simpan', array('class'=>'btn btn-info'))}}
                </div>
                <br><label id="error_company_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('company_name')}}</label>
        </div>
        
    {{Form::close()}}
@stop

@section ('page_script')
<script type="text/javascript">
	$(document).ready(
		$.ajax({url:"https://enigmatic-lowlands-7904.herokuapp.com/collections/tickets",success:function(result){
    		 var str = "";
    		 $.each(result, function (key, value) {
    		 	str+="<tr>";
    		 	str+= "<td>"+ result[key]._id + "</td>";
    		 	str+= "<td>"+ result[key].plane_id + "</td>";
    		 	str+= "<td>"+ result[key].customer_id + "</td>";
    		 	str+= "<td>"+ result[key].class + "</td>";
    		 	str+= "<td>"+ result[key].price + "</td>";
    		 	str+= "</tr>";
    		 });
    		 $("tbody").html(str);
  		}})
		);
</script>
@stop