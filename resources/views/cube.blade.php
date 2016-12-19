@extends('welcome')

@section('title', 'Cube Summation')

@section('content')

<form  method="post" action="/blade">
<table>
  <tr>
{{ csrf_field() }}
<input type="hidden" class="form-control" id="cases" name="cases" value="{{$testCases}}">
@for($i=0;$i<$testCases;$i++)
  <tr>
    <td>N/M:</td>
    <td>
      <input type="text" class="form-control" id="inputData" name="inputData[]" placeholder="example: 4 5">
    </td>
  </tr>
  @endfor
</table>
<br>
<input type="submit" name="" value="Aceptar" >

</form>
@endsection
