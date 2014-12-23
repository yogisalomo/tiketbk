@extends ('layouts.master')

@section ('content')    
  	<h2>Planes</h2>
    <table id="user" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
      <thead>
          <tr>
            <td><b>ID</b></td>
            <td><b>Kode Penerbangan</b></td>
            <td><b>Waktu Berangkat</b></td>
            <td><b>Asal</b></td>
            <td><b>Tujuan</b></td>
            <td><b>Kapasitas</b></td>
          </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
@stop

@section ('page_script')
<script type="text/javascript">
	$(document).ready(
		$.ajax({url:"https://enigmatic-lowlands-7904.herokuapp.com/collections/planes",success:function(result){
    		 var str = "";
    		 $.each(result, function (key, value) {
    		 	str+="<tr>";
    		 	str+= "<td>"+ result[key]._id + "</td>";
    		 	str+= "<td>"+ result[key].id + "</td>";
    		 	str+= "<td>"+ result[key].depart + "</td>";
    		 	str+= "<td>"+ result[key].from + "</td>";
    		 	str+= "<td>"+ result[key].to + "</td>";
    		 	str+= "<td>"+ result[key].capacity + "</td>";
    		 	str+= "</tr>";
    		 });
    		 $("tbody").html(str);
  		}})
		);
</script>
@stop