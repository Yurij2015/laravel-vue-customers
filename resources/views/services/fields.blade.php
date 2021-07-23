<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="name">Service Name</label>
    <div class="col-sm-10">
        <input name="name" id="name" type="text" class="form-control" placeholder="Service Name"
               value="{{$service->name ?? ''}}">
        <small class="form-text text-muted">Add service name</small>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="description">Service Description</label>
    <div class="col-sm-10">
        <input name="description" id="description" type="text" class="form-control"
               placeholder="Service Description" value="{{$service->description ?? ''}}">
        <small class="form-text text-muted">Add service description</small>
    </div>
</div>
@csrf
