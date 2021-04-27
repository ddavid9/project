@extends('layout')

@section('content')

<img id="picture" alt="chessboard" width="400" height="400"/>
<p id="test"></p>
<br>
<form onsubmit="return next()">
<input id="text" type="text" readonly>
<br>
<input id="rba" type="radio" id="A" name="option" value="2" required>
<label id="atxt" for="A">A</label><br>
<input id="rbb" type="radio" id="B" name="option" value="5">
<label id="btxt" for="B">B</label><br>
<input id="rbc" type="radio" id="C" name="option" value="10">
<label id="ctxt" for="C">C</label>
<br>

<input type="submit" value="Next">


</form>
<br>
@yield('save')

<script>
    //variable declaration
    var state=0
    var img = document.getElementById("picture");
    var savestate=document.getElementById("savestate");
    var rba=document.getElementById("rba");
    var atxt=document.getElementById("atxt");
    var rbb=document.getElementById("rbb");
    var txt=document.getElementById("text");
    var btxt=document.getElementById("btxt");
    var rbc=document.getElementById("rbc");
    var ctxt=document.getElementById("ctxt");
    var states = {!! json_encode($states->toArray()) !!};

</script>

    @yield('init')


<script>
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
        state =selectedValue;

        //end of game
        if(state>=11){
            document.getElementById("test").innerHTML = "Játék vége";
            return false;
        }else{

        //refresh

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

        return false;}

    }//on button end

</script>





@endsection
