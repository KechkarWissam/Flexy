@include('Roles::modals.delete')
@include('Roles::modals.edit')
<div class="text-center">
    <a  data-toggle="modal"
        href="javascript:;"
        data-target="#modals-edit-model-role-{{$model->id}}"
        class="btn btn-success shadow rounded mr-1"><i class="nav-icon fas fa-pen"></i></a>
    <a data-toggle="modal"
        href="javascript:;"
        class="btn btn-danger shadow rounded" 
        data-target="#modals-delete-model-role-{{$model->id}}">
        <i class="nav-icon fas fa-trash"></i>
    </a>
<div>
