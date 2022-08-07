<h1>Sample Form</h1>

<p>Consider a situation where you use integers as the names for your inputs, like this page.</p>

<p>You may also want to validate your inputs with an array that looks like this:</p>

<p>{{ var_dump(array_fill(1,3, 'required')) }}</p>

<p>If you submit this form though, you'll see that we've got an off by one error somewhere in the chain.</p>

@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach

<form method="post" action="{{ route('sample.store') }}">
    @csrf
    @foreach(range(1, 3) as $fieldId)
        <p>
            <label for="{{ $fieldId }}">Text Field # {{ $fieldId }}</label><br>
            <input id="{{ $fieldId }}" name="{{ $fieldId }}" type="text">
        </p>
    @endforeach

{{--    <p>--}}
{{--        <label for="one">Text Field # One</label><br>--}}
{{--        <input id="one" name="one" type="text">--}}
{{--    </p>--}}

{{--    <p>--}}
{{--        <label for="two">Text Field # Two</label><br>--}}
{{--        <input id="two" name="two" type="text">--}}
{{--    </p>--}}

{{--    <p>--}}
{{--        <label for="three">Text Field # Three</label><br>--}}
{{--        <input id="three" name="three" type="text">--}}
{{--    </p>--}}
    <button type="submit">Submit!</button>
</form>
