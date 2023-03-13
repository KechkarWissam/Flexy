
<div class="text-center">
    <a  class="btn btn-info shadow rounded mr-1">
        <i class="nav-icon fas fa-folder-open"></i>
    </a>
    <a  class="btn btn-success shadow rounded mr-1"
        data-toggle="modal"
        href="javascript:;"
        data-target="#modals-edit-model-user-{{$model->id}}">
        <i class="nav-icon fas fa-pen"></i>
    </a>
    <a  class="btn btn-danger shadow rounded"
        data-toggle="modal"
        href="javascript:;"
        data-target="#modals-archive-model-user-{{$model->id}}">
        <i class="nav-icon fas fa-trash"></i>
    </a>
</div>
@include('Users::modals.delete')
@include('Users::modals.edit')