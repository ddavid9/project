@extends('mainlayout')

@section('save')

<form action="/saves/{{$load->id}}" method=POST>
    @csrf
    @method('PUT')
    <input type="hidden" name="savestate" id="savestate" value=0>
    Name: <input type="text" name="title" id="title" value="{{old('title')}}" required>
    @error('title')
        <p>{{$errors->first('title')}}</p>
    @enderror

    <input type="submit" value="Save">
</form>

@endsection


@section('init')

<script>
var load = {!! json_encode($load->toArray()) !!};

state=load.state;
img.src="/pics/"+state+".PNG";
document.getElementById("test").innerHTML = state;
savestate.value=state;

txt.value =states[state].text;
rba.value=states[state].a;
atxt.innerHTML =states[state].atext;
rbb.value=states[state].b;
btxt.innerHTML =states[state].btext;
rbc.value=states[state].c;
ctxt.innerHTML =states[state].ctext;

</script>
@endsection
