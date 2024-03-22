<!-- @if(session('successMessage'))
    <div class="alert alert-success">
        {{ session('successMessage') }}
    </div>
@endif

@if(session('appointmentId'))

    <p><?php $id = Session::get('update_id'); 
    echo $id;?>
    </p>
@endif -->