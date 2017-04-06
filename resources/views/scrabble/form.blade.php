

{{-- /resources/views/books/search.blade.php --}}
@extends('layouts.master')

@section('title')
    Search
@endsection

@section('content')
    <h1>Search</h1>

    @if(count($errors) > 0)
        <div id="error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <form method="get" action="/form"> 
        <label for='word'>Word    </label>
        <input type='text' name='word' id='word'> 
        <? if (isset($wordErr)) echo $wordErr ?>
        <br><br>

        <label for='bonus'>Bonus Points</label><br>
        <input type='radio' name='bonus' <? if (isset($bonus) && $bonus=='none') echo "checked";?> value = 'none' checked> None<br>
        <input type='radio' name='bonus' <? if (isset($bonus) && $bonus=='double') echo "checked";?> value = 'double'> Double Word<br>
        <input type='radio' name='bonus' <? if (isset($bonus) && $bonus=='triple') echo "checked";?> value = 'triple'> Triple Word<br>
        <br>

        <label for='bingo'>Bingo</label><br>
        <input type='checkbox' name='bingo' value='true'> Yes 
        <br><br>

        <input type='submit' name='submit' value='Submit'>

        @if($word != null)
        <h2>Points for <em>{{ $word }}</em> : <em>{{ $points }}</em></h2>
        @endif

@endsection
