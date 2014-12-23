@extends ('layouts.master')

@section ('content')    
  	<h2>Customers</h2>
    <table id="user" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
      <thead>
          <tr>
            <td><b>ID</b></td>
            <td><b>Nama</b></td>
            <td><b>Nomor KTP</b></td>
            <td><b>Nomor Telepon</b></td>
            <td><b>Email</b></td>
          </tr>
      </thead>
      <tbody>
      	<div id="result">
    	</div>
      </tbody>
    </table>
@stop

@section ('page_script')
<script type="text/javascript">
	$(document).ready(
		$.ajax({url:"https://enigmatic-lowlands-7904.herokuapp.com/collections/customers",success:function(result){
    		 var str = "";
    		 $.each(result, function (key, value) {
    		 	str+="<tr>";
    		 	str+= "<td>"+ result[key]._id + "</td>";
    		 	str+= "<td>"+ result[key].name + "</td>";
    		 	str+= "<td>"+ result[key].ktp_number + "</td>";
    		 	str+= "<td>"+ result[key].phone_number + "</td>";
    		 	str+= "<td>"+ result[key].email + "</td>";
    		 	str+= "</tr>";
    		 });
    		 $("tbody").html(str);
  		}})
		);
</script>
@stop