<div class="panel">
  <div class="panel-heading">
    <h3>General Settings</h3>
  </div>
  <form class="form" action="{{route('settings.update')}}" method="POST">
    <div class="panel-body">
      <label>Library name:</label><br>
      <input class="form-control" name="name" value="{{$site->name}}" placeholder="Enter Library's name"><br>
      <label>Address:</label><br>
      <input class="form-control" name="address" value="{{$site->address}}" placeholder="Enter Library's address"><br>
        <label>Issue Interval:</label><br>
        <input class="form-control" name="issue_interval" value="{{$site->issue_interval}}" placeholder="Enter Issue Interval"><br>
        <label>Admin's Email:</label><br>
        <input class="form-control" name="admin_email" value="{{$site->admin_email}}" placeholder="Enter Admin's email"><br>
    </div>
    <div class="panel-footer">
      <input type="hidden" name="_token" value="{{\Session::token()}}">
      <button class="form-control btn btn-primary"><span class="fa fa-upload"></span> Update</button>
    </div>
  </form>
</div>