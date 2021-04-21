<html>
    <head>
        <meta charset="utf-8">
        <title>Картка користувача</title>
    </head>

    <body>

{{--        <h3>The id of the Contact is : {{$obj->id}}</h3>--}}


{{--        <h1>Name of the Contact is :  <?php echo $name; ?></h1>--}}

{{--

        <form action="/saveTestWords/save" method="POST">
    @csrf
    <input type="text" name="test" value="Test Data">
    <button type="submit">Submit</button>
</form>
--}}


{{--
            @foreach($students as $student)
                {{$student}} <br>
            @endforeach--}}


            @if(($id)==1)
                parameter id is equal to 1.
            @else
                parameter id is not equal to 1
            @endif
    </body>
</html>
