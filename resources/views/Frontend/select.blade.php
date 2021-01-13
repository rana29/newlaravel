@extends('Frontend.components.layouts')

@section('content')



<div class="form-group mt-5">
	<select class="form-control" id="division" name="division">
		<option value="">Select Division</option>
		@foreach($division as $division)
		<option value="{{$division->id}}">{{$division->name}}</option>
		@endforeach
		
	</select>

</div>

<div class="form-group mt-5">
	<select class="form-control" id="district" name="district">
		<option value="">Select District</option>
		<option value=""></option>
	</select>

</div>

<div class="form-group mt-5">
	<select class="form-control" id="thana" name="thana">
		<option value="">Select Thana</option>
		<option value="">Test</option>
	</select>

</div>

<script >
	let token=$('#_token').val();
	//alert(token)

	$('body').on('change','#division',function(){
    let division_id=$(this).val();
    
 
     $.ajax({
     	
     	method:'post',
     	url:'show/district',
     	data:{_token:token, division_id:division_id},
     	success:function(result){
         $('#district').html(result);
         //console.log(result)
     	}
     })


       

	})
</script>

@endsection