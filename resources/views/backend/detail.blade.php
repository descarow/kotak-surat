<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="card">
      <form action="{{route('detail', ['id'=>$data_saran->id])}}">
        <div class="card-header"><strong>Detail Feedback</strong></div>
        <div class="card-body card-block">
          {{-- <div class="form-group"><label for="name_user" class=" form-control-label">Name User</label><input type="text" name="name_user" id="name_user" value="{{$data_saran->}}" placeholder="Input name" class="form-control"></div> --}}
          <div class="form-group"><label for="user_id" class=" form-control-label">User ID</label><input type="text" name="user_id" id="user_id" value="{{$data_saran->user_id}}" placeholder="Input ID" class="form-control"></div>
          <div class="row form-group">
            <div class="col col-5"><label for="type" class=" form-control-label">Type</label></div>
            <div class="col-8 col-md-9" name="type" value="{{$data_saran->type}}">
              <select name="type" id="type" style="resize:none;width:938px" class="form-control">
                <option value="0">Saran</option>
                <option value="1">Kritik</option>
                <option value="2">Pujian</option>
              </select>
            </div> 
          </div>
          <div class="form-group"><label for="user_id" class=" form-control-label">Date</label><input type="date" name="date" id="" value="{{$data_saran->created_at}}" placeholder="" class="form-control"></div>
          <div class="form-group"><label for="message" class=" form-control-label">Message<textarea type="text" name="message" style="resize:none;width:938px;height:100px" id="message" value="{{$data_saran->message}}" placeholder="Message" class="form-control col-5"></textarea></div>
          <div class="form-group"><label for="respons" class=" form-control-label">Respons<textarea type="text" name="respons" style="resize:none;width:938px;height:100px" id="respons" value="" placeholder="Input Respons" class="form-control col-5"></textarea></div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Update
          </button>
          <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Back
          </button>
        </div>
      </form>
      </div>
    </main>