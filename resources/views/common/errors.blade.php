@if($errors->any())

@foreach ($errors->all() as $error)
<script>window.alert("{{$error}}")</script>
@endforeach  

@endif