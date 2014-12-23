@extends ('layouts.master')

@section ('content')    
  	<h2>Tickets</h2>
    <table id="user" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
      <thead>
          <tr>
            <td><b>ID</b></td>
            <td><b>ID Penerbangan</b></td>
            <td><b>ID Pelanggan</b></td>
            <td><b>Kelas</b></td>
            <td><b>Harga</b></td>
          </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <h3>Info Tiket</h3>
    <div id="detailtiket"></div>
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