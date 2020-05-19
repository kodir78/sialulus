{{--  viariabel $model akan mengikuti model yang digunakan di PostControoler  --}}
<form id="deleteForm"  class="d-inline" action="{{route('graduates.destroy', $model->id)}}" method="POST">
  @csrf
  @method('delete')
  <a href="{{ route('graduates.show', $model->id) }}" class="btn btn-xs btn-default edit-row" title="Show"><i class="fas fa-edit"></i></a>  
  {{--  <button href="{{ route('graduates.destroy', $model->id) }}"  id="del" title="Move Trash"  class="btn btn-danger btn-xs delete-row">
      <i class="fas fa-trash-alt"></i>
  </button>  --}}
</form>

{{--  Penggunaan Sweet Alert  --}}
    <script>
        $('button#del').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })
        })
    </script>