@if($errors->any())

@foreach ($errors->all() as $error)
<script>window.alert("{{$error}}")</script>
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach  

@endif