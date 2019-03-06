@if (count($errors) > 0)
    <div class="text-center alert alert-warning">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
@endif