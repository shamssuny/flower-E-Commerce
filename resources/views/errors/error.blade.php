@foreach($errors->all() as $error)
    <div class="error">
        <p class="alert alert-warning">{{ $error }}</p>
    </div>
@endforeach