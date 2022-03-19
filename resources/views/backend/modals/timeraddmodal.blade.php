<div class="modal fade" id="timer" tabindex="-1" role="dialog" aria-labelledby="FlipCardAdd"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FlipCardAdd">Add Time</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('timer-store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="custom select">Select Course</label>
                        <select class="form-control" name="course_id">
                          <option label="Choose Course"></option>
                          <?php foreach ($course as $item): ?>
                            <option value="{{$item->id}}">{{$item->course_title}}</option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                    <div class="form-group">
                        <label for="time">Time Set</label>
                        <input type="text" class="form-control" name="timer" id="time"
                               placeholder="YYYY/MM/DD H:M:S">
                    </div>
                    <div class="form-group">
                        <label for="vimeo_id">Status</label>
                        <select name="" id="">
                            <Option value="1">Active</Option>
                            <Option value="0">Inactive</Option>
                        </select>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')

<script>
    $(function(){
        $('#time').datetimepicker({
            format:'Y-MM-DD h:m:s',
        })
        .on('dp.change',function(ev){
            
        })
    })
</script>
    
@endpush
