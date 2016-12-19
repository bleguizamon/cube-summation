@extends('welcome')

@section('title', 'Cube Summation')


@section('content')

<form  method="post" action="/cases">
<table>

{{ csrf_field() }}
    <td>T:</td>
    <td>
      <select id="T"   name="T" >
        @for ($i = 1; $i < 51; $i++)
            The current value is }
            <option value="{{ $i }}">{{ $i }}</option>

        @endfor
       </select>
    </td>
  </tr>
</table>
<br>
<input type="submit" name="" value="Aceptar" >

</form>
@endsection
