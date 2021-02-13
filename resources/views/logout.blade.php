
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h1>LOGOUT</h1>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Yakin ingin logout?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="{{ route('logout') }}">
            <button type="button" class="btn btn-danger">Logout</button>
        </a>
      </div>
    </div>
  </div>
</div>
