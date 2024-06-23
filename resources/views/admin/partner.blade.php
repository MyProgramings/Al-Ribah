@extends('admin.theme.default')

@section('image')
         التصنيفات
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> إضافة شريك
                <form method="post" action="{{ route('partners.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-10">
                            <input type="file" id="image" accept="image/*" onchange="readCoverImage(this);" class="form-control py-0 @error('image') is-invalid @enderror" name="image" placeholder="التصنيف">
                            <div class="input-title">اسحب الصورة إلى هنا أو انقر للاختيار يدويًا</div>
                            @error('image')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <img id="cover-image-partners" width="100" height="100">
                            <span class="input-name col-6"></span>
                        </div>

                        <div class="col pt-2">
                            <button type="submit" class="btn btn-dark">حفظ </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الصورة</th>
                        <th>تاريخ الإنشاء</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($partners as $partner)
                    <tr>
                        <td>{{ $partner->id }}</td>
                        <td>{{ $partner->image }}</td>
                        <td>{{ $partner->created_at }}</td>
                        <td>
                        <form method="post" action="{{ route('partners.destroy', $partner->id) }}" onsubmit="return confirm('هل أنت متأكد أنك تريد حذف الشريك هذا؟')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" style="background-color: white;border: none;"><i class="far fa-trash-alt text-danger fa-lg"></i> </button>       
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function readCoverImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('#cover-image-partners').setAttribute('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
