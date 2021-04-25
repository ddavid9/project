@extends('layout')

@section('content')

<img id="picture" alt="chessboard" width="400" height="400"/>
<p id="test"></p>
<br>
<form onsubmit="return next()">
<input id="rba" type="radio" id="A" name="option" value="2" required>
<label id="atxt" for="A">A</label><br>
<input id="rbb" type="radio" id="B" name="option" value="5">
<label id="btxt" for="B">B</label><br>
<input id="rbc" type="radio" id="C" name="option" value="10">
<label id="ctxt" for="C">C</label>
<br>
<input type="submit">
</form>

<script>
    //variable declaration
    var state=0
    var img = document.getElementById("picture");
    var rba=document.getElementById("rba");
    var atxt=document.getElementById("atxt");
    var rbb=document.getElementById("rbb");
    var btxt=document.getElementById("btxt");
    var rbc=document.getElementById("rbc");
    var ctxt=document.getElementById("ctxt");
    var states = {!! json_encode($states->toArray()) !!};
    //update
    img.src="pics/"+state+".PNG";
    document.getElementById("test").innerHTML = state;

    rba.value=states[state].a;
    atxt.innerHTML =states[state].atext;
    rbb.value=states[state].b;
    btxt.innerHTML =states[state].btext;
    rbc.value=states[state].c;
    ctxt.innerHTML =states[state].ctext;

    //on button press
    function next()
    {
        //which radio button is selected
        var rbs = document.querySelectorAll('input[name="option"]');
            var selectedValue;
            for (var rb of rbs) {
                if (rb.checked) {
                    selectedValue = rb.value;
                    rb.checked=false;
                    break;
                }
            }
        //refresh
        state =selectedValue;
        img.src="pics/"+state+".PNG";
        document.getElementById("test").innerHTML = state;

        rba.value=states[state].a;
        atxt.innerHTML =states[state].atext;
        rbb.value=states[state].b;
        btxt.innerHTML =states[state].btext;
        rbc.value=states[state].c;
        ctxt.innerHTML =states[state].ctext;

        return false;
    }//on button end

</script>





@endsection
